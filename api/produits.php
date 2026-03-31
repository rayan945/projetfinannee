<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XYZ Shop - Produits</title>
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
    

    <main class="products-main">
        <!-- Hero Banner -->
        <section class="products-hero">
            <h1>Nos Collections Exclusives</h1>
            <p>Découvrez nos deux produits phares</p>
        </section>

        <!-- Showcase Produits -->
        <section class="products-showcase">
            <div class="product-feature left">
                <div class="product-image">
                    <img src="photo/product_image_1.png" alt="Produit 1">
                    <div class="product-overlay">
                        <span class="exclusive-tag">Exclusif</span>
                    </div>
                </div>
                <div class="product-details">
                    <h2>Casque XYZ</h2>
                    <p class="product-description">
                        Le casque XYZ offre une qualité sonore exceptionnelle avec une réduction active du bruit et des basses profondes, parfait pour une écoute immersive. Son design élégant et son confort longue durée, grâce à ses oreillettes en mousse à mémoire de forme, assurent un usage agréable toute la journée. Avec une autonomie impressionnante et une connectivité Bluetooth, il est idéal pour une écoute sans contrainte.
                    </p>
                    <div class="product-price">299.99 €</div>
                    <button class="add-to-cart-btn">
                        <span>Ajouter au panier</span>
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>
            </div>

            <div class="product-feature right">
                <div class="product-details">
                    <h2>Ecouteur sans fils</h2>
                    <p class="product-description">
                        Découvrez nos écouteurs sans fil, conçus pour offrir une expérience audio de qualité, une grande liberté de mouvement et un confort optimal au quotidien.
                    <div class="product-price">399.99 €</div>
                    <button class="add-to-cart-btn">
                        <span>Ajouter au panier</span>
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                </div>
                <div class="product-image">
                    <img src="photo/ecouteurs-sans-fil.jpg" alt="Produit 2">
                    <div class="product-overlay">
                        <span class="exclusive-tag">Nouveau</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Avantages -->
        <section class="product-benefits">
            <div class="benefit">
                <i class="fas fa-shipping-fast"></i>
                <h3>Livraison Rapide</h3>
                <p>Livraison gratuite sous 48h</p>
            </div>
            <div class="benefit">
                <i class="fas fa-shield-alt"></i>
                <h3>Garantie Premium</h3>
                <p>Garantie 2 ans incluse</p>
            </div>
            <div class="benefit">
                <i class="fas fa-undo"></i>
                <h3>Retours Gratuits</h3>
                <p>30 jours pour changer d'avis</p>
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
    
</body>
</html> 