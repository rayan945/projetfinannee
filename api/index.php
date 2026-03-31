<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XYZ Shop - Accueil</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo-container">
            <a href="index.php" class="corner-logo">
                <img src="logo/LOGO 1 DORÉ.png" alt="XYZ Shop Logo">
            </a>
        </div>
        
        <nav class="main-nav">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="index.php" class="nav-link active">
                        <span class="nav-text">Accueil</span>
                        <span class="nav-line"></span>
                    </a>
                </li>
                <li class="nav-item has-dropdown">
                    <a href="produits.php" class="nav-link">
                        <span class="nav-text">Produits</span>
                        <i class="fas fa-chevron-down"></i>
                        <span class="nav-line"></span>
                    </a>
                    
                    </div>
                </li>
                <li class="nav-item has-dropdown">
                    <a href="apropos.php" class="nav-link">
                        <span class="nav-text">Entreprise</span>
                        <i class="fas fa-chevron-down"></i>
                        <span class="nav-line"></span>
                    </a>
                    
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">
                        <span class="nav-text">Contact</span>
                        <span class="nav-line"></span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="home-hero">
            <div class="hero-content">
                <h1>Innovation & Excellence</h1>
                <p class="hero-subtitle">Découvrez notre collection de produits innovants</p>
                <div class="hero-buttons">
                    <a href="produits.php" class="cta-button primary">
                        <span>Nos Produits</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="apropos.php" class="cta-button secondary">
                        <span>Notre Histoire</span>
                        <i class="fas fa-info-circle"></i>
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <img src="photo/ia.webp" alt="Innovation XYZ">
            </div>
        </section>

        <!-- Innovation Section -->
        <section class="innovation-section">
            <div class="section-header">
                <span class="section-tag">Notre Vision</span>
                <h2>L'Innovation au Service du Quotidien</h2>
                <p>Nous créons des produits qui redéfinissent l'excellence</p>
            </div>
            <div class="innovation-grid">
                <div class="innovation-card">
                    <i class="fas fa-microchip"></i>
                    <h3>Technologie Avancée</h3>
                    <p>Des composants de dernière génération pour une performance optimale</p>
                </div>
                <div class="innovation-card">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Sécurité Maximale</h3>
                    <p>Protection de vos données et de votre vie privée</p>
                </div>
                <div class="innovation-card">
                    <i class="fas fa-leaf"></i>
                    <h3>Éco-responsable</h3>
                    <p>Des produits conçus dans le respect de l'environnement</p>
                </div>
            </div>
        </section>


        <section class="experience-section">
            <div class="experience-content">
                <div class="section-header light">
                    <span class="section-tag">Notre Engagement</span>
                    <h2>Une Expérience Unique</h2>
                    <p>Chaque produit est conçu pour vous offrir une expérience exceptionnelle</p>
                </div>
                <div class="stats-grid">
                    <div class="stat-item">
                        <span class="stat-number">10K+</span>
                        <span class="stat-label">Clients Satisfaits</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">99%</span>
                        <span class="stat-label">Avis Positifs</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">24/7</span>
                        <span class="stat-label">Support Client</span>
                    </div>
                </div>
            </div>
        </section>

        
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-bubbles">
            <!-- Bulle Logo et À propos -->
            <div class="footer-bubble">
                <div class="bubble-icon">
                    <img src="logo/LOGO 1 DORÉ.png" alt="XYZ Shop Logo" style="width: 80px; height: 80px;">
                </div>
                <h3 class="bubble-title">XYZ Shop</h3>
                <p style="color: #aaa;">L'excellence à votre service</p>
                <div class="social-icons">
                    <a href="https://facebook.com/xyzshop" target="_blank" class="social-icon" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://instagram.com/xyzshop" target="_blank" class="social-icon" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://twitter.com/xyzshop" target="_blank" class="social-icon" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>
    
            <!-- Bulle Navigation -->
            <div class="footer-bubble">
                <i class="fas fa-compass bubble-icon"></i>
                <h3 class="bubble-title">Navigation</h3>
                <div class="bubble-content">
                    <ul class="bubble-links">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="produits.php">Produits</a></li>
                        <li><a href="apropos.php">Entreprise</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
    
            <!-- Bulle Services -->
            <div class="footer-bubble">
                <i class="fas fa-concierge-bell bubble-icon"></i>
                <h3 class="bubble-title">Services</h3>
                <div class="bubble-content">
                    <ul class="bubble-links">
                        <li><a href="#">Support Client</a></li>
                        <li><a href="#">Livraison Rapide</a></li>
                        <li><a href="#">Retours Gratuits</a></li>
                    </ul>
                </div>
            </div>
    
            <!-- Bulle Contact -->
            <div class="footer-bubble">
                <i class="fas fa-envelope bubble-icon"></i>
                <h3 class="bubble-title">Contact</h3>
                <div class="bubble-content">
                    <p style="color: #aaa;">contact@xyzshop.com</p>
                    <p style="color: #aaa;">+33 1 23 45 67 89</p>
                    <p style="color: #aaa;">Paris, France</p>
                </div>
            </div>
        </div>
    
        <div class="footer-bottom">
            <p>&copy; 2024 XYZ Shop. Tous droits réservés.</p>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>