<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XYZ Shop - Contact</title>
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
    
    <main class="contact-main">
        <!-- Hero Section -->
        <section class="contact-hero">
            <h1>Contactez-nous</h1>
            <p>Notre équipe est à votre écoute</p>
        </section>

        <!-- Contact Section -->
        <section class="contact-section">
            <div class="contact-container">
                <!-- Informations de contact -->
                <div class="contact-info">
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-content">
                            <h3>Notre Adresse</h3>
                            <p><br>30 -32 Av de la République,94800 Villejuif, France</p>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info-content">
                            <h3>Téléphone</h3>
                            <p>+33 1 23 45 67 89</p>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h3>Email</h3>
                            <p>contact-support@gmail.com</p>
                        </div>
                    </div>
                </div>

                <!-- Formulaire de contact modernisé -->
                <div class="contact-form-container">
                    <form class="contact-form" method="post" id='contact-form'>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" id="nom" name="nom" required>
                                <label for="nom">Nom</label>
                                <div class="input-line"></div>
                            </div>
                            <div class="input-group">
                                <input type="text" id="prenom" name="prenom" required>
                                <label for="prenom">Prénom</label>
                                <div class="input-line"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" id="email" name="email" required>
                                <label for="email">Email</label>
                                <div class="input-line"></div>
                            </div>
                            <div class="input-group">
                                <input type="tel" id="telephone" name="telephone">
                                <label for="telephone">Téléphone (optionnel)</label>
                                <div class="input-line"></div>
                            </div>
                        </div>

                        <div class="input-group full-width">
                            <select id="sujet" name="sujet" required>
                                <option value="" disabled selected>Sélectionnez un sujet</option>
                                <option value="information">Demande d'information</option>
                                <option value="commande">Question sur une commande</option>
                                <option value="support">Support technique</option>
                                <option value="autre">Autre</option>
                            </select>
                            <div class="input-line"></div>
                        </div>

                        <div class="input-group full-width">
                            <textarea id="message" name="message" rows="5" required></textarea>
                            <label for="message">Votre message</label>
                            <div class="input-line"></div>
                        </div>

                        <div class="form-footer">
                            <label class="checkbox-container">
                                <input type="checkbox" required>
                                <span class="checkmark"></span>
                                <span class="checkbox-text">J'accepte que mes données soient traitées dans le cadre de ma demande</span>
                            </label>
                            <button type="submit" class="submit-btn">
                                <span>Envoyer</span>
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-bubbles">
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

<script>
    document.getElementById('contact-form').addEventListener('submit', function(e) {
        e.preventDefault(); // empeche le rechargement de la page
        const nom = e.target.nom.value;
        const prenom = e.target.prenom.value;
        const sujet = e.target.sujet.value;
        const message = e.target.sujet.value;

        if(email && prenom && sujet && message){
            window.location.href='merci.php';
        }
    })
</script>
</html> 