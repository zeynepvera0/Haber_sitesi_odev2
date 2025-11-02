<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anadolu Haber - Güvenilir Haberin Adresi</title>
    
</head>
<body>

    <header class="site-header">
        <div class="header-container">
            <a href="index.php" class="logo">ANADOLU<span>HABER</span></a>
            
            <nav class="main-nav">
                <ul>
                    <li><a href="index.php">ANA SAYFA</a></li>
                    <li><a href="index.php?category=gundem">GÜNDEM</a></li>
                    <li><a href="index.php?category=ekonomi">EKONOMİ</a></li>
                    <li><a href="index.php?category=spor">SPOR</a></li>
                    <li><a href="index.php?category=saglik">SAĞLIK</a></li>
                    <li><a href="index.php?category=teknoloji">TEKNOLOJİ</a></li>
                </ul>
            </nav>
            
            <div class="user-actions">
                <button class="search-btn">Ara</button>
                <button class="login-btn" id="loginBtn">Giriş Yap</button>
            </div>
        </div>
    </header>
    
    
    <section class="hero">
        <article class="main-story">
            <img src="https://picsum.photos/800/450?random=1" alt="Ana Haber Görseli">
            <div class="story-content">
                <span class="story-tag">GÜNDEM</span>
                <h1 class="story-title">Cumhurbaşkanı Erdoğan, Yeni Ekonomi Paketini Açıkladı</h1>
                <p class="story-excerpt">Cumhurbaşkanı Recep Tayyip Erdoğan, enflasyonla mücadele ve istihdamı artırmaya yönelik yeni ekonomi paketinin detaylarını paylaştı. Paket kapsamında KOBİ'lere yönelik destekler artırılırken, konut ve otomobil alımlarında vergi indirimleri getirilecek.</p>
                <div class="story-meta">15 Ekim 2023 | 342 Yorum</div>
            </div>
        </article>
        
        <div class="side-stories">
            <article class="side-story">
                <img src="https://picsum.photos/200/150?random=2" alt="Yan Haber Görseli">
                <div class="side-content">
                    <h3 class="side-title">İstanbul'da Metrobüs Kazası: 12 Yaralı</h3>
                    <div class="story-meta">14 Ekim 2023</div>
                </div>
            </article>
            
            <article class="side-story">
                <img src="https://picsum.photos/200/150?random=3" alt="Yan Haber Görseli">
                <div class="side-content">
                    <h3 class="side-title">Bakan Koca: Yeni Hastanelerin Temeli Atılıyor</h3>
                    <div class="story-meta">14 Ekim 2023</div>
                </div>
            </article>
            
            <article class="side-story">
                <img src="https://picsum.photos/200/150?random=4" alt="Yan Haber Görseli">
                <div class="side-content">
                    <h3 class="side-title">Galatasaray Avrupa'da Tarihi Zafer Elde Etti</h3>
                    <div class="story-meta">13 Ekim 2023</div>
                </div>
            </article>
        </div>
    </section>
    
    
    <div class="ad-container">Reklam Alanı - Sitemizi destekleyen sponsorlarımız</div>
    
   
    <div class="weather-widget">
        <strong>İstanbul için Hava Durumu:</strong> 18°C, Parçalı Bulutlu | Yarın: 20°C, Güneşli
    </div>
    
    
    
    
    
    
    $category = $_GET['category'] ?? 'all';
    $filteredNews = [];

    if ($category === 'all' || empty($category)) {
        $filteredNews = $newsData;
    } else {
        foreach ($newsData as $news) {
            if ($news['category'] === $category) {
                $filteredNews[] = $news;
            }
        }
    }
    ?>
    
    <h2 class="section-title">
        <?php 
        if ($category === 'all' || empty($category)) {
            echo 'SON HABERLER';
        } else {
            echo strtoupper($category) . ' HABERLERİ';
        }
        ?>
    </h2>
    <div class="news-grid">
        <?php foreach ($filteredNews as $news): ?>
        <article class="news-card">
            <img src="<?php echo $news['image']; ?>" alt="<?php echo $news['title']; ?>">
            <div class="card-content">
                <span class="story-tag"><?php echo strtoupper($news['category']); ?></span>
                <h3 class="card-title"><?php echo $news['title']; ?></h3>
                <p class="card-excerpt"><?php echo $news['excerpt']; ?></p>
                <div class="story-meta"><?php echo $news['date']; ?> | <?php echo $news['comments']; ?> Yorum</div>
            </div>
        </article>
        <?php endforeach; ?>
    </div>
    
    
    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-column">
                <h3>ANADOLU HABER</h3>
                <ul class="footer-links">
                    <li><a href="#">Hakkımızda</a></li>
                    <li><a href="#">İletişim</a></li>
                    <li><a href="#">Künye</a></li>
                    <li><a href="#">Reklam</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3>KATEGORİLER</h3>
                <ul class="footer-links">
                    <li><a href="index.php?category=gundem">Gündem</a></li>
                    <li><a href="index.php?category=ekonomi">Ekonomi</a></li>
                    <li><a href="index.php?category=spor">Spor</a></li>
                    <li><a href="index.php?category=saglik">Sağlık</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3>HİZMETLER</h3>
                <ul class="footer-links">
                    <li><a href="#">E-Bülten</a></li>
                    <li><a href="#">Mobil Uygulama</a></li>
                    <li><a href="#">RSS</a></li>
                    <li><a href="#">Yazarlar</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3>YASAL</h3>
                <ul class="footer-links">
                    <li><a href="#">Gizlilik Politikası</a></li>
                    <li><a href="#">Kullanım Şartları</a></li>
                    <li><a href="#">Çerez Politikası</a></li>
                    <li><a href="#">KVKK</a></li>
                </ul>
            </div>
        </div>
        
        <div class="copyright">
            &copy; 2023 Anadolu Haber - Tüm hakları saklıdır.
        </div>
    </footer>
    
    
    <div class="modal" id="loginModal">
        <div class="modal-content">
            <button class="close-modal" id="closeLogin">&times;</button>
            <h2 class="modal-title">Hesabınıza Giriş Yapın</h2>
            <form id="loginForm">
                <div class="form-group">
                    <label for="email">E-posta Adresi</label>
                    <input type="email" id="email" name="email" placeholder="E-posta adresinizi girin" required>
                </div>
                <div class="form-group">
                    <label for="password">Şifre</label>
                    <input type="password" id="password" name="password" placeholder="Şifrenizi girin" required>
                </div>
                <button type="submit" class="submit-btn">Giriş Yap</button>
                <div class="form-footer">
                    <p>Hesabınız yok mu? <a href="#" id="showRegister">Kayıt Olun</a></p>
                </div>
            </form>
        </div>
    </div>
    
    
    <div class="modal" id="registerModal">
        <div class="modal-content">
            <button class="close-modal" id="closeRegister">&times;</button>
            <h2 class="modal-title">Yeni Hesap Oluşturun</h2>
            <form id="registerForm">
                <div class="form-group">
                    <label for="fullName">Ad Soyad</label>
                    <input type="text" id="fullName" name="fullName" placeholder="Adınız ve soyadınız" required>
                </div>
                <div class="form-group">
                    <label for="regEmail">E-posta Adresi</label>
                    <input type="email" id="regEmail" name="email" placeholder="E-posta adresinizi girin" required>
                </div>
                <div class="form-group">
                    <label for="regPassword">Şifre</label>
                    <input type="password" id="regPassword" name="password" placeholder="Şifre oluşturun" required>
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Şifre Tekrar</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Şifrenizi tekrar girin" required>
                </div>
                <button type="submit" class="submit-btn">Kayıt Ol</button>
                <div class="form-footer">
                    <p>Zaten hesabınız var mı? <a href="#" id="showLogin">Giriş Yapın</a></p>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginBtn = document.getElementById('loginBtn');
            const loginModal = document.getElementById('loginModal');
            const registerModal = document.getElementById('registerModal');
            const closeLogin = document.getElementById('closeLogin');
            const closeRegister = document.getElementById('closeRegister');
            const showRegister = document.getElementById('showRegister');
            const showLogin = document.getElementById('showLogin');
            
          
            loginBtn.addEventListener('click', function() {
                loginModal.style.display = 'flex';
            });
            
           
            closeLogin.addEventListener('click', function() {
                loginModal.style.display = 'none';
            });
            
            closeRegister.addEventListener('click', function() {
                registerModal.style.display = 'none';
            });
            
           
            showRegister.addEventListener('click', function(e) {
                e.preventDefault();
                loginModal.style.display = 'none';
                registerModal.style.display = 'flex';
            });
            
            
            showLogin.addEventListener('click', function(e) {
                e.preventDefault();
                registerModal.style.display = 'none';
                loginModal.style.display = 'flex';
            });
            
           
            window.addEventListener('click', function(e) {
                if (e.target === loginModal) {
                    loginModal.style.display = 'none';
                }
                if (e.target === registerModal) {
                    registerModal.style.display = 'none';
                }
            });
            
           
            document.getElementById('loginForm').addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Giriş başarılı! (Bu sadece bir demo)');
                loginModal.style.display = 'none';
            });
            
            document.getElementById('registerForm').addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Kayıt başarılı! (Bu sadece bir demo)');
                registerModal.style.display = 'none';
            });
        });
    </script>
</body>
</html>