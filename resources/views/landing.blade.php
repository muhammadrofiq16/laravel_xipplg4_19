<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epic Phone | Premium iPhone Experience</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="burger-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="logo">iLuxury</div>
        <!-- ... rest of navbar ... -->
        <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#products">Products</a>
            <a href="#features">Features</a>
            <a href="#testimonials">Testimonials</a>
            <a href="Contact.html">Contact</a>
            <a href="#contact">Footer</a>
        </div>
        <!-- Di dalam navbar, ganti bagian nav-actions dengan ini -->
        <div class="nav-actions">
            <i class="fas fa-search"></i>
            <i class="fas fa-user"></i>
            <div class="cart-icon-container">
                <i class="fas fa-shopping-bag"></i>
                <span class="cart-count">0</span>
                <div class="cart-popup">
                    <div class="cart-popup-header">
                        <h4>Keranjang Belanja</h4>
                        <i class="fas fa-times close-cart"></i>
                    </div>
                    <div class="cart-items">
                        <!-- Item keranjang akan ditambahkan di sini secara dinamis -->
                        <p class="empty-cart-message">Keranjang belanja kosong</p>
                    </div>
                    <div class="cart-popup-footer">
                        <div class="cart-total">
                            <span>Total:</span>
                            <span class="total-price">$0</span>
                        </div>
                        <button class="checkout-btn">Checkout</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="mobile-menu">
            <div class="mobile-links">
                <a href="#home">Home</a>
                <a href="#products">Products</a>
                <a href="#features">Features</a>
                <a href="#testimonials">Testimonials</a>
                <a href="contact.html">Contact</a>
            </div>
            <div class="mobile-actions">
                <i class="fas fa-search"></i>
                <i class="fas fa-user"></i>
                <i class="fas fa-shopping-bag"></i>
            </div>
        </div>

    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Nikmati iPhone Seperti Belum Pernah Anda Rasakan Sebelumnya</h1>
            <p>Temukan perpaduan sempurna antara teknologi mutakhir dan desain istimewa dengan koleksi eksklusif
                iPhone premium kami..</p>
            <a href="#products" class="cta-button">Jelajahi Koleksi</a>
        </div>
        <div class="hero-image"></div>
    </section>

    <!-- Featured Products -->
    <section class="featured" id="products">
        <div class="section-header">
            <h2>Koleksi Premium Kami</h2>
            <p>Setiap perangkat dipilih dengan cermat untuk menawarkan Anda pengalaman Apple terbaik dengan berbagai
                manfaat eksklusif.
            </p>
        </div>

        <!-- Produk Terlaris -->
        <section class="best-sellers" id="gallery">
            <h2>Produk Terlaris</h2>
            <div class="products-grid">
                <!-- Produk 1 -->
                <div class="product-card">
                    <img src="foto/fotomk-3/iPhone 13 128GB.webp" alt="iPhone 13" class="product-image">
                    <div class="product-info">
                        <h3 class="product-title">iPhone 13 128GB</h3>
                        <p class="product-description">Kondisi 95% seperti baru, baterai kesehatan 98%, fullset dengan
                            box dan aksesoris.</p>
                        <span class="product-grade grade-a">Grade A</span>
                        <p class="product-price">Rp 8.999.000</p>
                        <div class="product-actions">
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                </div>

                <!-- Produk 2 -->
                <div class="product-card">
                    <img src="foto/fotomk-3/iPhone 12 Pro 256GB.jpg" alt="iPhone 12 Pro" class="product-image">
                    <div class="product-info">
                        <h3 class="product-title">iPhone 12 Pro 256GB</h3>
                        <p class="product-description">Kondisi 90% seperti baru, baterai kesehatan 92%, unit only (tanpa
                            box).</p>
                        <span class="product-grade grade-b">Grade B</span>
                        <p class="product-price">Rp 7.499.000</p>
                    </div>
                </div>

                <!-- Produk 3 -->
                <div class="product-card">
                    <img src="foto/fotomk-3/iPhone 11 Pro 64GB.jpg" alt="iPhone 11" class="product-image">
                    <div class="product-info">
                        <h3 class="product-title">iPhone 11 64GB</h3>
                        <p class="product-description">Kondisi 85% seperti baru, baterai kesehatan 86%, fullset dengan
                            box.</p>
                        <span class="product-grade grade-b">Grade B</span>
                        <p class="product-price">Rp 5.499.000</p>
                    </div>
                </div>

                <!-- Produk 4 -->
                <div class="product-card">
                    <img src="foto/fotomk-3/iPhone X 256GB.jpg" alt="iPhone X" class="product-image">
                    <div class="product-info">
                        <h3 class="product-title">iPhone X 256GB</h3>
                        <p class="product-description">Kondisi 80%, baterai kesehatan 82%, unit only, layar sudah
                            diganti original.</p>
                        <span class="product-grade grade-c">Grade C</span>
                        <p class="product-price">Rp 3.999.000</p>
                    </div>
                </div>

                <!-- Produk 5 -->
                <div class="product-card">
                    <img src="foto/fotomk-3/iPhone 14 Pro 128GB.webp" alt="iPhone 14 Pro" class="product-image">
                    <div class="product-info">
                        <h3 class="product-title">iPhone 14 Pro 128GB</h3>
                        <p class="product-description">Kondisi 98% seperti baru, baterai kesehatan 100%, fullset dengan
                            box.</p>
                        <span class="product-grade grade-a">Grade A</span>
                        <p class="product-price">Rp 14.999.000</p>
                    </div>
                </div>

                <!-- Produk 6 -->
                <div class="product-card">
                    <img src="foto/fotomk-3/iPhone SE 2020 64GB.jpg" alt="iPhone SE" class="product-image">
                    <div class="product-info">
                        <h3 class="product-title">iPhone SE 2020 64GB</h3>
                        <p class="product-description">Kondisi 88% seperti baru, baterai kesehatan 90%, unit only.</p>
                        <span class="product-grade grade-b">Grade B</span>
                        <p class="product-price">Rp 3.499.000</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Semua Produk -->
        <section class="all-products">
            <h2>Semua Produk</h2>
            <div class="products-grid" id="all-products-grid">
                <!-- Produk 1 -->
                <!-- Contoh pada salah satu product card, lakukan hal yang sama untuk semua product card -->
                <div class="product-card">
                    <img src="foto/fotomk-3/iPhone 13 128GB.jpg" alt="iPhone 13" class="product-image">
                    <div class="product-info">
                        <h3 class="product-title">iPhone 13 128GB</h3>
                        <p class="product-description">Kondisi 95% seperti baru, baterai kesehatan 98%, fullset dengan
                            box dan aksesoris.</p>
                        <span class="product-grade grade-a">Grade A</span>
                        <p class="product-price">Rp 8.999.000</p>
                        <div class="product-actions">
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                </div>

                <!-- Produk 2 -->
                <div class="product-card">
                    <img src="foto/fotomk-3/iPhone 12 64GB.jpg" alt="iPhone 12" class="product-image">
                    <div class="product-info">
                        <h3 class="product-title">iPhone 12 64GB</h3>
                        <p class="product-description">Kondisi 85% seperti baru, baterai kesehatan 88%, unit only.</p>
                        <span class="product-grade grade-b">Grade B</span>
                        <p class="product-price">Rp 6.499.000</p>
                    </div>
                </div>

                <!-- Produk 3 -->
                <div class="product-card">
                    <img src="foto/fotomk-3/iPhone XR 128GB.jpg" alt="iPhone XR" class="product-image">
                    <div class="product-info">
                        <h3 class="product-title">iPhone XR 128GB</h3>
                        <p class="product-description">Kondisi 82% seperti baru, baterai kesehatan 85%, unit only.</p>
                        <span class="product-grade grade-b">Grade B</span>
                        <p class="product-price">Rp 4.499.000</p>
                    </div>
                </div>

                <!-- Produk 4 -->
                <div class="product-card">
                    <img src="foto/fotomk-3/iPhone 8 Plus 64GB.jpg" alt="iPhone 8 Plus" class="product-image">
                    <div class="product-info">
                        <h3 class="product-title">iPhone 8 Plus 64GB</h3>
                        <p class="product-description">Kondisi 78%, baterai kesehatan 80%, unit only, layar original.
                        </p>
                        <span class="product-grade grade-c">Grade C</span>
                        <p class="product-price">Rp 3.299.000</p>
                    </div>
                </div>

                <!-- Produk 5 -->
                <div class="product-card">
                    <img src="foto/fotomk-3/iPhone 14 128GB.webp" alt="iPhone 14" class="product-image">
                    <div class="product-info">
                        <h3 class="product-title">iPhone 14 128GB</h3>
                        <p class="product-description">Kondisi 96% seperti baru, baterai kesehatan 99%, fullset dengan
                            box.</p>
                        <span class="product-grade grade-a">Grade A</span>
                        <p class="product-price">Rp 11.999.000</p>
                    </div>
                </div>

                <!-- Produk 6 -->
                <div class="product-card">
                    <img src="foto/fotomk-3/iPhone 7 32GB.jpg" alt="iPhone 7" class="product-image">
                    <div class="product-info">
                        <h3 class="product-title">iPhone 7 32GB</h3>
                        <p class="product-description">Kondisi 75%, baterai kesehatan 78%, unit only, kondisi fisik ada
                            baret kecil.</p>
                        <span class="product-grade grade-c">Grade C</span>
                        <p class="product-price">Rp 2.199.000</p>
                    </div>
                </div>

                <!-- Produk 7 -->
                <div class="product-card">
                    <img src="foto/fotomk-3/iPhone 12 mini 128GB.webp" alt="iPhone 12 mini" class="product-image">
                    <div class="product-info">
                        <h3 class="product-title">iPhone 12 mini 128GB</h3>
                        <p class="product-description">Kondisi 87% seperti baru, baterai kesehatan 90%, fullset dengan
                            box.</p>
                        <span class="product-grade grade-b">Grade B</span>
                        <p class="product-price">Rp 6.999.000</p>
                    </div>
                </div>

                <!-- Produk 8 -->
                <div class="product-card">
                    <img src="foto/fotomk-3/iPhone 11 Pro 64GB.jpg" alt="iPhone 11 Pro" class="product-image">
                    <div class="product-info">
                        <h3 class="product-title">iPhone 11 Pro 64GB</h3>
                        <p class="product-description">Kondisi 88% seperti baru, baterai kesehatan 91%, unit only.</p>
                        <span class="product-grade grade-b">Grade B</span>
                        <p class="product-price">Rp 7.499.000</p>
                    </div>
                </div>

                <!-- Produk 9 -->
                <div class="product-card">
                    <img src="foto/fotomk-3/iPhone XS 256GB.jpg" alt="iPhone XS" class="product-image">
                    <div class="product-info">
                        <h3 class="product-title">iPhone XS 256GB</h3>
                        <p class="product-description">Kondisi 83% seperti baru, baterai kesehatan 87%, unit only.</p>
                        <span class="product-grade grade-b">Grade B</span>
                        <p class="product-price">Rp 5.499.000</p>
                    </div>
                </div>
            </div>

            <div class="see-all-container">
                <button class="see-all-btn" id="see-all-btn">See All</button>
            </div>
        </section>
</body>

</html>
</section>

<!-- Features Section -->
<section class="features" id="features">
    <div class="section-header">
        <h2>Mengapa memilih iLuxury</h2>
        <p>Kami tidak hanya menjual ponsel, tetapi juga memberikan pengalaman kepemilikan yang luar biasa.</p>
    </div>
    <div class="features-grid">
        <!-- Feature 1 -->
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-shield-alt"></i>
            </div>
            <h3>Garansi Premium</h3>
            <p>Garansi diperpanjang 2 tahun dengan cakupan kerusakan yang tidak disengaja untuk ketenangan pikiran sepenuhnya.</p>
        </div>

        <!-- Feature 2 -->
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-truck"></i>
            </div>
            <h3>Pengiriman Ekspres Global</h3>
            <p>Pengiriman ekspres gratis ke seluruh dunia dengan pelacakan dan konfirmasi tanda tangan.</p>
        </div>

        <!-- Feature 3 -->
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-gem"></i>
            </div>
            <h3>Kustomisasi Eksklusif</h3>
            <p>Personalisasi perangkat Anda dengan ukiran premium dan hasil akhir khusus.</p>
        </div>

        <!-- Feature 4 -->
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-headset"></i>
            </div>
            <h3>Layanan 24/7</h3>
            <p>Tim dukungan khusus tersedia sepanjang waktu untuk semua kebutuhan Anda.</p>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="testimonials" id="testimonials">
    <div class="section-header">
        <h2>Testimonials</h2>
        <p>Dengarkan apa yang dikatakan pelanggan kami tentang perjalanan iLuxury mereka.</p>
    </div>
    <div class="testimonials-slider">
        <!-- Testimonial 1 -->
        <div class="testimonial-card">
            <div class="testimonial-content">
                <p>Perhatian terhadap detail dan layanan personal dari iLuxury sungguh tak tertandingi. iPhone saya tiba
                    dalam kemasan yang sangat indah, lengkap dengan semua aksesori premium yang saya inginkan.
                    Benar-benar pengalaman yang luar biasa.</p>
            </div>
            <div class="testimonial-author">
                <img src="queen.jpg" alt="Sarah J." class="author-avatar">
                <div class="author-info">
                    <h4>Queena Aisya Prasetyawan</h4>
                    <p>SIswi SMK TELKOM PURWOKERTO</p>
                </div>
            </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="testimonial-card" style="display: none;">
            <div class="testimonial-content">
                <p>Sebagai pengguna Apple lama, saya belum pernah merasakan layanan sebagus ini. Tim iLuxury membantu
                    saya menyesuaikan iPhone saya persis seperti yang saya inginkan.</p>
            </div>
            <div class="testimonial-author">
                <img src="kepala sekolah.png" alt="Tata Sambada, S.T., M.B.A" class="author-avatar">
                <div class="author-info">
                    <h4>Tata Sambada, S.T., M.B.A</h4>
                    <p>Kepala SMK TELKOM PURWOKERTOr</p>
                </div>
            </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="testimonial-card" style="display: none;">
            <div class="testimonial-content">
                <p>Garansi yang diperpanjang memberi saya ketenangan pikiran. Ketika saya tak sengaja menjatuhkan
                    ponsel, mereka mengirimkan penggantinya ke hotel saya di Paris dalam waktu 24 jam. Layanannya luar
                    biasa!</p>
            </div>
            <div class="testimonial-author">
                <img src="prabowo.png" alt="Emma L." class="author-avatar">
                <div class="author-info">
                    <h4>Prabowo Adi Sanjaya</h4>
                    <p>SIswa SMK TELKOM PURWOKERTO</p>
                </div>
            </div>
        </div>
    </div>
</section>

</section>



<!-- CTA Section -->
<section class="cta-section">
    <div class="cta-content">
        <h2>Bergabunglah dengan Pengalaman iLuxury</h2>
        <p>Sign up untuk akses eksklusif ke edisi terbatas, acara pribadi, dan pengalaman belanja yang dipersonalisasi.
        </p>
        <a href="#" class="cta-button">Become a Member</a>
    </div>
</section>

<!-- Footer -->
<footer class="footer" id="contact">
    <div class="footer-grid">
        <!-- Column 1 -->
        <div class="footer-column">
            <h3>iLuxury</h3>
            <p style="color: #b5b5b5; line-height: 1.6; margin-top: 1rem;">Mendefinisikan ulang pengalaman teknologi premium
dengan layanan tak tertandingi dan produk eksklusif.</p>
            <div class="social-links">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
            </div>
        </div>

        <!-- Column 2 -->
        <div class="footer-column">
            <h3>Shop</h3>
            <ul>
                <li><a href="#">iPhone 15 Series</a></li>
                <li><a href="#">iPhone 14 Series</a></li>
                <li><a href="#">Limited Editions</a></li>
                <li><a href="#">Accessories</a></li>
                <li><a href="#">Bundles</a></li>
            </ul>
        </div>

        <!-- Column 3 -->
        <div class="footer-column">
            <h3>Services</h3>
            <ul>
                <li><a href="#">Personal Shopping</a></li>
                <li><a href="#">Device Customization</a></li>
                <li><a href="#">Trade-In Program</a></li>
                <li><a href="#">Extended Warranty</a></li>
                <li><a href="#">VIP Support</a></li>
            </ul>
        </div>

        <!-- Column 4 -->
        <div class="footer-column">
            <h3>Company</h3>
            <ul>
                <li><a href="#">Our Story</a></li>
                <li><a href="#">Press</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>

            </ul>
        </div>
    </div>
    <!-- Quick View Panel -->
    <div id="quickViewPanel" class="quick-view-panel">
        <div class="panel-content">
            <span class="close-panel">&times;</span>
            <img id="panelImage" src="" alt="Product Image">
            <h3 id="panelTitle"></h3>
            <p id="panelDescription"></p>
            <p id="panelPrice" class="panel-price"></p>
            <button class="buy-now">Buy Now</button>
        </div>
    </div>

    <!-- Scroll to Top Button -->
    <button id="scrollTopBtn" title="Kembali ke Atas">
        <i class="fas fa-chevron-up"></i>
    </button>
    <div class="footer-bottom">
        <p>&copy; 2023 iLuxury. All rights reserved. Apple, iPhone, and iPad are trademarks of Apple Inc.</p>
    </div>
</footer>
<!-- Midtrans Payment Integration -->
<!-- 1. Midtrans Snap (opsional untuk demo) -->
<script type="text/javascript"
        src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-YOUR_ACTUAL_KEY"></script>

<!-- 2. Your scripts in correct order -->
<script src="{{ asset('js/script.js') }}"></script>
<script src="js/midtrans"></script>
<script src="js/product.js"></script>
<!-- Toast Container -->
<div id="toast-container"></div>
</body>
  <p></p>
</html>