<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XYZ Shop - À propos</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<!-- Header commun à toutes les pages -->
<header>
    <div class="logo-container">
        <a href="api/index.php" class="corner-logo">
            <img src="logo/LOGO 1 DORÉ.png" alt="XYZ Shop Logo">
        </a>
    </div>
    
    <nav class="main-nav">
        <ul class="nav-list">
            <li class="nav-item">
                <a href="api/index.php" class="nav-link">
                    <span class="nav-text">Accueil</span>
                    <span class="nav-line"></span>
                </a>
            </li>
            <li class="nav-item has-dropdown">
                <a href="api/produits.php" class="nav-link">
                    <span class="nav-text">Produits</span>
                    <i class="fas fa-chevron-down"></i>
                    <span class="nav-line"></span>
                </a>
                
                </div>
            </li>
            <li class="nav-item has-dropdown">
                <a href="api/apropos.php" class="nav-link">
                    <span class="nav-text">Entreprise</span>
                    <i class="fas fa-chevron-down"></i>
                    <span class="nav-line"></span>
                </a>
                
            </li>
            <li class="nav-item">
                <a href="api/contact.php" class="nav-link">
                    <span class="nav-text">Contact</span>
                    <span class="nav-line"></span>
                </a>
            </li>
        </ul>
    </nav>
</header>
    
    <main class="about-main">
        <!-- Section Hero avec Bulles -->
        <section class="bubble-hero">
            <div class="bubble main-bubble">
                <h1>Notre Histoire</h1>
                <p>Découvrez l'univers unique de XYZ Shop</p>
            </div>
        </section>

        <!-- Section Histoire -->
        <section class="bubble-section">
            <div class="bubble-container">
                <div class="bubble bubble-left">
                    <h2>Notre Vision</h2>
                    <p>Créée en 2024, XYZ Shop incarne l'excellence et l'innovation dans le commerce en ligne.</p>
                </div>
                <div class="bubble bubble-right">
                    <h2>Notre Mission</h2>
                    <p>Offrir une expérience d'achat exceptionnelle et des produits de qualité supérieure.</p>
                </div>
            </div>
        </section>

        <!-- Section Valeurs -->
        <section class="bubble-values">
            <div class="bubble-cluster">
                <div class="bubble value-bubble">
                    <div class="value-icon">🌟</div>
                    <h3>Excellence</h3>
                    <p>La qualité avant tout</p>
                </div>
                <div class="bubble value-bubble">
                    <div class="value-icon">🤝</div>
                    <h3>Confiance</h3>
                    <p>Des relations durables</p>
                </div>
                <div class="bubble value-bubble">
                    <div class="value-icon">♻️</div>
                    <h3>Durabilité</h3>
                    <p>Un avenir responsable</p>
                </div>
            </div>
        </section>

        <!-- Section Équipe -->
        <section class="bubble-team">
            <h2 class="section-title">Notre Équipe</h2>
            <div class="team-bubbles">
                <div class="bubble team-bubble">
                    <img src="photo/user.webp" alt="Soumeya Mansouri">
                    <h3>Soumeya Mansouri</h3>
                    <p>Directrice Créative</p>
                </div>
                <div class="bubble team-bubble">
                    <img src="photo/user.webp" alt="Amine Boutahar">
                    <h3>Amine Boutahar</h3>
                    <p>Directeur Commercial</p>
                </div>
                <div class="bubble team-bubble">
                    <img src="photo/user.webp" alt="Sirine Sadraoui">
                    <h3>Sirine Sadraoui</h3>
                    <p>Responsable Client</p>
                </div>
                <div class="bubble team-bubble">
                    <img src="photo/user.webp" alt="Rayan Sainsard">
                    <h3>Rayan Sainsard</h3>
                    <p>Directeur Commercial</p>
                </div>
                <div class="bubble team-bubble">
                    <img src="photo/user.webp" alt="Raphael Fouquet">
                    <h3>Raphael Fouquet</h3>
                    <p>Responsable Client</p>
                </div>
            </div>
        </section>

        <!-- Section Stats -->
        <section class="bubble-stats">
            <div class="stats-bubbles">
                <div class="bubble stat-bubble">
                    <span>10K+</span>
                    <p>Clients Satisfaits</p>
                </div>
                <div class="bubble stat-bubble">
                    <span>500+</span>
                    <p>Produits Exclusifs</p>
                </div>
                <div class="bubble stat-bubble">
                    <span>24/7</span>
                    <p>Support Client</p>
                </div>
            </div>
        </section>
    </main>

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
                        <li><a href="apropos.php">À propos</a></li>
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
 
</body>
</html> 