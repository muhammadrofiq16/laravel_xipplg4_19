// midtrans.js - FRONTEND ONLY VERSION (Limited Testing)
class MidtransPayment {
    constructor() {
        this.initializePayment();
    }

    initializePayment() {
        // Tunggu sampai cart ready
        const checkInterval = setInterval(() => {
            if (typeof cart !== 'undefined') {
                clearInterval(checkInterval);
                this.setupCheckoutButton();
            }
        }, 100);
    }

    setupCheckoutButton() {
        this.checkoutBtn = document.querySelector('checkout-btn');
        
        if (this.checkoutBtn) {
            this.checkoutBtn.addEventListener('click', () => this.handlePayment());
        }
    }

    async handlePayment() {
        const cartItems = cart.getCart();
        
        if (!cartItems || cartItems.length === 0) {
            this.showToast('Keranjang belanja kosong', 'error');
            return;
        }

        // Hitung total
        const totalPrice = cartItems.reduce((total, item) => {
            const price = parseFloat(item.price.replace(/[^\d]/g, ''));
            return total + (price * item.quantity);
        }, 0);

        try {
            this.setButtonLoading(true);
            
            // OPSI 1: Gunakan Demo Payment Simulator
            this.openDemoPaymentSimulator(totalPrice, cartItems);
            
            // OPSI 2: Atau gunakan test token (lihat Opsi 2)
            // this.useTestToken();
            
        } catch (error) {
            console.error('Payment error:', error);
            this.showToast('Error processing payment', 'error');
        } finally {
            this.setButtonLoading(false);
        }
    }

    openDemoPaymentSimulator(totalPrice, cartItems) {
        // Buat modal simulasi pembayaran
        const modal = document.createElement('div');
        modal.innerHTML = `
            <div style="position: fixed; inset: 0; background: rgba(0,0,0,0.5); z-index: 9999; display: flex; align-items: center; justify-content: center;">
                <div style="background: white; padding: 30px; border-radius: 15px; max-width: 500px; width: 90%;">
                    <h2 style="color: #333; margin-bottom: 20px;">🎭 Demo Payment Simulator</h2>
                    <p style="color: #666; margin-bottom: 15px;">Ini adalah simulasi pembayaran untuk testing.</p>
                    <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                        <p><strong>Total:</strong> Rp ${totalPrice.toLocaleString('id-ID')}</p>
                        <p><strong>Items:</strong> ${cartItems.length} produk</p>
                    </div>
                    <div style="display: flex; gap: 10px;">
                        <button onclick="window.simulatePaymentSuccess()" style="flex: 1; padding: 12px; background: #4caf50; color: white; border: none; border-radius: 8px; cursor: pointer;">
                            ✅ Simulasi Sukses
                        </button>
                        <button onclick="window.simulatePaymentFailed()" style="flex: 1; padding: 12px; background: #f44336; color: white; border: none; border-radius: 8px; cursor: pointer;">
                            ❌ Simulasi Gagal
                        </button>
                        <button onclick="window.closePaymentModal()" style="flex: 1; padding: 12px; background: #999; color: white; border: none; border-radius: 8px; cursor: pointer;">
                            Batal
                        </button>
                    </div>
                    <p style="color: #999; font-size: 12px; margin-top: 15px; text-align: center;">
                        ⚠️ Untuk production, gunakan backend integration
                    </p>
                </div>
            </div>
        `;
        
        document.body.appendChild(modal);
        
        // Setup global functions untuk buttons
        window.simulatePaymentSuccess = () => {
            document.body.removeChild(modal);
            this.handlePaymentSuccess();
        };
        
        window.simulatePaymentFailed = () => {
            document.body.removeChild(modal);
            this.showToast('Pembayaran gagal (simulasi)', 'error');
        };
        
        window.closePaymentModal = () => {
            document.body.removeChild(modal);
            this.showToast('Pembayaran dibatalkan', 'info');
        };
    }

    handlePaymentSuccess() {
        this.showToast('✅ Pembayaran berhasil! (Demo Mode)', 'success');
        
        // Clear cart
        cart.cart = [];
        cart.saveCart();
        cart.updateCartUI();
        
        // Close cart popup
        const cartPopup = document.querySelector('.cart-popup');
        if (cartPopup) {
            cartPopup.classList.remove('active');
        }
        
        // Optional: redirect
        setTimeout(() => {
            // window.location.href = '/success.html';
        }, 2000);
    }

    setButtonLoading(loading) {
        if (this.checkoutBtn) {
            this.checkoutBtn.disabled = loading;
            this.checkoutBtn.textContent = loading ? 'Processing...' : 'Checkout';
        }
    }

    showToast(message, type = 'info') {
        const toast = document.createElement('div');
        toast.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 25px;
            background: ${type === 'success' ? '#4caf50' : type === 'error' ? '#f44336' : '#2196f3'};
            color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            z-index: 10000;
            animation: slideIn 0.3s ease;
        `;
        toast.textContent = message;
        
        document.body.appendChild(toast);
        
        setTimeout(() => {
            toast.style.animation = 'slideOut 0.3s ease';
            setTimeout(() => document.body.removeChild(toast), 300);
        }, 3000);
    }
}

// Initialize
document.addEventListener('DOMContentLoaded', () => {
    new MidtransPayment();
});