<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anadolu Haber - Güvenilir Haberin Adresi</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: 'Georgia', 'Times New Roman', serif;
            line-height: 1.6;
            color: #333;
            background: #f8f8f8;
            font-size: 16px;
        }
        
        .site-header {
            background: #1a1a1a;
            border-bottom: 3px solid #c00;
            padding: 15px 0;
        }
        
        .header-container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            color: #fff;
            font-size: 28px;
            font-weight: bold;
            text-decoration: none;
        }
        
        .logo span {
            color: #c00;
        }
        
        .main-nav ul {
            display: flex;
            list-style: none;
        }
        
        .main-nav li {
            margin: 0 12px;
        }
        
        .main-nav a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s;
        }
        
        .main-nav a:hover {
            color: #c00;
        }
        
        .user-actions {
            display: flex;
            align-items: center;
        }
        
        .search-btn, .login-btn {
            background: none;
            border: none;
            color: #fff;
            cursor: pointer;
            margin-left: 15px;
            font-size: 16px;
        }
        
        .login-btn {
            background: #c00;
            padding: 8px 16px;
            border-radius: 4px;
        }
        
        .hero {
            width: 90%;
            max-width: 1200px;
            margin: 25px auto;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 25px;
        }
        
        .main-story {
            background: #fff;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .main-story img {
            width: 100%;
            height: 350px;
            object-fit: cover;
        }
        
        .story-content {
            padding: 20px;
        }
        
        .story-tag {
            display: inline-block;
            background: #c00;
            color: #fff;
            padding: 4px 10px;
            border-radius: 3px;
            font-size: 14px;
            margin-bottom: 10px;
        }
        
        .story-title {
            font-size: 28px;
            margin-bottom: 15px;
            line-height: 1.3;
        }
        
        .story-excerpt {
            color: #555;
            margin-bottom: 15px;
            font-size: 17px;
        }
        
        .story-meta {
            color: #777;
            font-size: 14px;
            border-top: 1px solid #eee;
            padding-top: 15px;
        }
        
        .side-stories {
            display: flex;
            flex-direction: column;
        }
        
        .side-story {
            background: #fff;
            margin-bottom: 20px;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            display: flex;
        }
        
        .side-story img {
            width: 120px;
            height: 100px;
            object-fit: cover;
        }
        
        .side-content {
            padding: 15px;
            flex: 1;
        }
        
        .side-title {
            font-size: 16px;
            margin-bottom: 8px;
        }
        
        .section-title {
            font-size: 24px;
            margin: 30px 0 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #c00;
            width: 90%;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .news-grid {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto 40px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
        }
        
        .news-card {
            background: #fff;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        
        .news-card:hover {
            transform: translateY(-5px);
        }
        
        .news-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        
        .card-content {
            padding: 20px;
        }
        
        .card-title {
            font-size: 18px;
            margin-bottom: 10px;
            line-height: 1.4;
        }
        
        .card-excerpt {
            color: #555;
            font-size: 15px;
            margin-bottom: 15px;
        }
        
        .site-footer {
            background: #1a1a1a;
            color: #fff;
            padding: 40px 0 20px;
        }
        
        .footer-container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }
        
        .footer-column h3 {
            color: #c00;
            margin-bottom: 20px;
            font-size: 18px;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: #fff;
        }
        
        .copyright {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #333;
            color: #999;
            font-size: 14px;
        }
        
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.7);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }
        
        .modal-content {
            background: #fff;
            width: 90%;
            max-width: 400px;
            border-radius: 5px;
            padding: 30px;
            position: relative;
        }
        
        .close-modal {
            position: absolute;
            top: 15px;
            right: 15px;
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: #777;
        }
        
        .modal-title {
            margin-bottom: 20px;
            font-size: 22px;
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        
        .submit-btn {
            width: 100%;
            background: #c00;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .submit-btn:hover {
            background: #a00;
        }
        
        .form-footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }
        
        .form-footer a {
            color: #c00;
            text-decoration: none;
        }
        
        .ad-container {
            background: #f0f0f0;
            padding: 20px;
            text-align: center;
            margin: 20px auto;
            width: 90%;
            max-width: 1200px;
            border: 1px dashed #ccc;
            font-style: italic;
            color: #777;
        }
        
        .weather-widget {
            background: #e9f5ff;
            padding: 15px;
            border-radius: 5px;
            margin: 20px auto;
            width: 90%;
            max-width: 1200px;
            text-align: center;
            border-left: 4px solid #4a90e2;
        }
        
        @media (max-width: 900px) {
            .hero {
                grid-template-columns: 1fr;
            }
            
            .footer-container {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .main-nav ul {
                flex-wrap: wrap;
            }
        }
        
        @media (max-width: 600px) {
            .header-container {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .main-nav {
                margin: 15px 0;
            }
            
            .main-nav ul {
                flex-direction: column;
            }
            
            .main-nav li {
                margin: 5px 0;
            }
            
            .user-actions {
                width: 100%;
                justify-content: space-between;
            }
            
            .footer-container {
                grid-template-columns: 1fr;
            }
            
            .side-story {
                flex-direction: column;
            }
            
            .side-story img {
                width: 100%;
                height: 150px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
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
    
    <!-- Hero Section -->
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
    
    <!-- Reklam Alanı -->
    <div class="ad-container">Reklam Alanı - Sitemizi destekleyen sponsorlarımız</div>
    
    <!-- Hava Durumu -->
    <div class="weather-widget">
        <strong>İstanbul için Hava Durumu:</strong> 18°C, Parçalı Bulutlu | Yarın: 20°C, Güneşli
    </div>
    
    <!-- Haberler -->
    <?php
    // Haber verilerini PHP array olarak tanımla
    $newsData = [
        [
            "id" => 1,
            "title" => "Cumhurbaşkanı Erdoğan, Yeni Ekonomi Paketini Açıkladı",
            "excerpt" => "Cumhurbaşkanı Recep Tayyip Erdoğan, enflasyonla mücadele ve istihdamı artırmaya yönelik yeni ekonomi paketinin detaylarını paylaştı.",
            "category" => "gundem",
            "image" => "https://picsum.photos/400/250?random=1",
            "date" => "15 Ekim 2023",
            "comments" => 342
        ],
        [
            "id" => 2,
            "title" => "İstanbul'da Metrobüs Kazası: 12 Yaralı",
            "excerpt" => "İstanbul'da meydana gelen metrobüs kazasında 12 kişi yaralandı. Kazayla ilgili soruşturma başlatıldı.",
            "category" => "gundem",
            "image" => "https://picsum.photos/400/250?random=2",
            "date" => "14 Ekim 2023",
            "comments" => 89
        ],
        [
            "id" => 3,
            "title" => "Bakan Koca: Yeni Hastanelerin Temeli Atılıyor",
            "excerpt" => "Sağlık Bakanı Fahrettin Koca, 5 ilde yeni şehir hastanelerinin temelinin atılacağını açıkladı.",
            "category" => "saglik",
            "image" => "https://picsum.photos/400/250?random=3",
            "date" => "14 Ekim 2023",
            "comments" => 45
        ],
        [
            "id" => 4,
            "title" => "Galatasaray Avrupa'da Tarihi Zafer Elde Etti",
            "excerpt" => "Galatasaray, UEFA Şampiyonlar Ligi'nde İngiliz temsilcisini 3-1 mağlup ederek tarihi bir zafer kazandı.",
            "category" => "spor",
            "image" => "https://picsum.photos/400/250?random=4",
            "date" => "13 Ekim 2023",
            "comments" => 215
        ],
        [
            "id" => 5,
            "title" => "Dolar/TL kuru son 3 ayın en düşük seviyesinde",
            "excerpt" => "Merkez Bankası'nın aldığı tedbirler ve yurtiçi piyasalardaki iyimser havanın etkisiyle dolar/TL kuru 18,50 seviyelerine geriledi.",
            "category" => "ekonomi",
            "image" => "https://picsum.photos/400/250?random=5",
            "date" => "15 Ekim 2023",
            "comments" => 167
        ],
        [
            "id" => 6,
            "title" => "Yerli aşıda faz 3 çalışmaları tamamlandı",
            "excerpt" => "Türk bilim insanları tarafından geliştirilen yerli aşıda faz 3 çalışmaları başarıyla tamamlandı. Aşının seri üretimine başlanacak.",
            "category" => "saglik",
            "image" => "https://picsum.photos/400/250?random=6",
            "date" => "15 Ekim 2023",
            "comments" => 98
        ],
        [
            "id" => 7,
            "title" => "Fenerbahçe, Süper Lig'de liderliğini sürdürdü",
            "excerpt" => "Spor Toto Süper Lig'in 9. haftasında Fenerbahçe, deplasmanda aldığı galibiyetle liderlik koltuğunu korumayı başardı.",
            "category" => "spor",
            "image" => "https://picsum.photos/400/250?random=7",
            "date" => "14 Ekim 2023",
            "comments" => 312
        ],
        [
            "id" => 8,
            "title" => "TBMM'de yeni yasama yılı start aldı",
            "excerpt" => "TBMM'de yeni yasama yılı, Cumhurbaşkanı Erdoğan'ın konuşmasıyla başladı. Gündemde ekonomi ve terörle mücadele var.",
            "category" => "gundem",
            "image" => "https://picsum.photos/400/250?random=8",
            "date" => "14 Ekim 2023",
            "comments" => 76
        ],
        [
            "id" => 9,
            "title" => "Üniversite giriş sınavında yeni sistem açıklandı",
            "excerpt" => "ÖSYM Başkanı, üniversite giriş sınavında yapılacak değişiklikleri açıkladı. Yeni sistemde soru sayıları azaltılacak.",
            "category" => "gundem",
            "image" => "https://picsum.photos/400/250?random=9",
            "date" => "13 Ekim 2023",
            "comments" => 234
        ],
        [
            "id" => 10,
            "title" => "Türk mühendisler yerli işletim sistemini tanıttı",
            "excerpt" => "Türk mühendisler tarafından geliştirilen yerli işletim sistemi Pardus'un yeni sürümü kullanıcılarla buluştu.",
            "category" => "teknoloji",
            "image" => "https://picsum.photos/400/250?random=10",
            "date" => "12 Ekim 2023",
            "comments" => 189
        ]
    ];

    // Kategoriye göre haberleri filtreleme
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
    
    <!-- Footer -->
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
    
    <!-- Login Modal -->
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
    
    <!-- Register Modal -->
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
            
            // Giriş modalını aç
            loginBtn.addEventListener('click', function() {
                loginModal.style.display = 'flex';
            });
            
            // Modal'ları kapat
            closeLogin.addEventListener('click', function() {
                loginModal.style.display = 'none';
            });
            
            closeRegister.addEventListener('click', function() {
                registerModal.style.display = 'none';
            });
            
            // Kayıt modalına geç
            showRegister.addEventListener('click', function(e) {
                e.preventDefault();
                loginModal.style.display = 'none';
                registerModal.style.display = 'flex';
            });
            
            // Giriş modalına geç
            showLogin.addEventListener('click', function(e) {
                e.preventDefault();
                registerModal.style.display = 'none';
                loginModal.style.display = 'flex';
            });
            
            // Dışarı tıklayınca modal'ı kapat
            window.addEventListener('click', function(e) {
                if (e.target === loginModal) {
                    loginModal.style.display = 'none';
                }
                if (e.target === registerModal) {
                    registerModal.style.display = 'none';
                }
            });
            
            // Form gönderimini işle (sadece demo)
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