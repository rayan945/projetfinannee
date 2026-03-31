// Données des produits
const products = [
    {
        id: 1,
        name: "Produit 1",
        price: 29.99,
        image: "photo/product_image_1.png"
    },
    {
        id: 2,
        name: "Produit 2",
        price: 39.99,
        image: "photo/product_image_2.png"
    },
    // Ajoutez d'autres produits ici
];

// Affichage des produits sur la page
function displayProducts() {
    const productsGrid = document.querySelector('.products-grid');
    if (!productsGrid) return;

    products.forEach(product => {
        const productElement = document.createElement('div');
        productElement.className = 'product-card';
        productElement.innerHTML = `
            <img src="${product.image}" alt="${product.name}">
            <h3>${product.name}</h3>
            <p>${product.price.toFixed(2)} €</p>
            <button onclick="addToCart(${product.id})">Ajouter au panier</button>
        `;
        productsGrid.appendChild(productElement);
    });
}

// Initialisation
document.addEventListener('DOMContentLoaded', () => {
    displayProducts();
});

// Menu déroulant
const menuToggle = document.querySelector('.menu-toggle');
const navMenu = document.querySelector('.nav-menu');

menuToggle?.addEventListener('click', function() {
    this.classList.toggle('active');
    navMenu.classList.toggle('active');
});

// Fermer le menu si on clique en dehors
document.addEventListener('click', function(e) {
    if (!menuToggle?.contains(e.target) && !navMenu.contains(e.target)) {
        menuToggle?.classList.remove('active');
        navMenu.classList.remove('active');
    }
});

// Gestion du formulaire de contact
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault(); // Empêche l'envoi traditionnel du formulaire
            
            // Redirection vers la page de remerciement
            window.location.href = 'merci.html';
        });
    }
});

document.addEventListener('DOMContentLoaded', function() {
    // Menu mobile toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const navList = document.querySelector('.nav-list');
    const dropdownToggles = document.querySelectorAll('.has-dropdown .nav-link');

    menuToggle?.addEventListener('click', function() {
        this.classList.toggle('active');
        navList.classList.toggle('active');
    });

    // Gestion des dropdowns en mobile
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            if (window.innerWidth <= 968) {
                e.preventDefault();
                const dropdown = this.nextElementSibling;
                dropdown.classList.toggle('active');
            }
        });
    });

    // Fermer le menu si on clique en dehors
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.main-nav')) {
            navList.classList.remove('active');
            menuToggle?.classList.remove('active');
        }
    });

    // Animation du line sous le texte
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            const line = this.querySelector('.nav-line');
            line.style.width = '100%';
        });

        link.addEventListener('mouseleave', function() {
            const line = this.querySelector('.nav-line');
            if (!this.classList.contains('active')) {
                line.style.width = '0';
            }
        });
    });

    // Gestion automatique de la classe active dans le menu
    const currentPage = window.location.pathname.split('/').pop();

    
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPage) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}); 