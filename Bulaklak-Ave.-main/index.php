<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift Shop</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        html {
            scroll-behavior: smooth; /* Enables smooth scrolling */
        }
    </style>
    <script>
        function cartButtonClicked() {
            // Show a popup message
            const userConfirmed = confirm("You need to log in first to access the cart.");
            if (userConfirmed) {
                // Redirect to login.php if the user clicks "OK"
                window.location.href = "register_in.php";
            }
        }
    </script>
</head>

<body>

    <!-- Header -->
    <header>
        <nav>
            <div class="navTop">
                <div class="shopLocation">
                    <span>📍 Store Location</span>
                </div>
                <div class="shopName">
                    <h1>Bulaklak Ave.</h1>
                </div>
                <div class="navRight">
                    <button class="searchBtn">🔍</button>
                    <a href="register_in.php" class="loginBtn"><button>Login</button></a>
                    <!-- Add the cart button with onclick event -->
                    <button class="add-to-cart" onclick="cartButtonClicked()">🛒</button>
                </div>
            </div>
            <div class="navBottom">
                <ul class="menuList">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#category">Category</a></li>
                    <li><a href="#shop">Shop</a></li>
                    <li><a href="#popular">Popular <sup>Hot Offers</sup></a></li>
                    <li><a href="#recent">Recent</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <span class="collection-label">C O L L E C T I O N</span>
            <h2>Various<br>Collection of<br>Gifts or Souvenirs</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.<br>Consequatur provident saepe quia incidunt iusto fugit</p>
            <a href="#shop"><button class="shop-now">Shop Now</button></a>
        </div>
        <div class="hero-image">
            <img src="Home.jpg" alt="Home">
        </div>
    </section>

    <!-- Category Section -->
    <section id="category">
        <div class="category-container">
            <div class="category-item">
                <div class="category-icon">
                    <img src="annual-flower.png" alt="Annual Flower">
                </div>
                <span>Annual Flower</span>
            </div>
            <div class="category-item">
                <div class="category-icon">
                    <img src="perennial-flower.png" alt="Perennial Flower">
                </div>
                <span>Perennial Flower</span>
            </div>
            <div class="category-item">
                <div class="category-icon">
                    <img src="biennial-flower.png" alt="Biennial Flower">
                </div>
                <span>Biennial Flower</span>
            </div>
            <div class="category-item">
                <div class="category-icon">
                    <img src="rose-flower.png" alt="Rose Flower">
                </div>
                <span>Rose Flower</span>
            </div>
            <div class="category-item">
                <div class="category-icon">
                    <img src="sunflower.png" alt="Sunflower">
                </div>
                <span>Sunflower</span>
            </div>
            <div class="category-item">
                <div class="category-icon">
                    <img src="hydrangea.png" alt="Hydrangea">
                </div>
                <span>Hydrangea</span>
            </div>
            <a href="category.html" class="show-more">Show More <span class="arrow">→</span></a>
        </div>
    </section>

    <!-- Popular Section -->
    <section id="popular">
        <h2>Popular Gifts/Souvenirs</h2>
        <div class="products-grid">
            <div class="product-card">
                <span class="new-tag">New</span>
                <img src="flower-pot-1.png" alt="Orange Flower Pot">
                <h3>Flower Pot</h3>
                <div class="price">
                    <span class="current-price">20$</span>
                    <span class="original-price">40$</span>
                </div>
                <button class="add-to-cart">Add To Cart</button>
            </div>
            <div class="product-card">
                <span class="new-tag">New</span>
                <img src="flower-pot-2.png" alt="Purple Flower Pot">
                <h3>Flower Pot</h3>
                <div class="price">
                    <span class="current-price">20$</span>
                    <span class="original-price">40$</span>
                </div>
                <button class="add-to-cart">Add To Cart</button>
            </div>
        </div>
        <a href="popular.html" class="show-more">Show More <span class="arrow">→</span></a>
    </section>

    <!-- Shop Section -->
    <section id="shop">
        <h2>Shop</h2>
        <div class="products-grid">
            <div class="product-card">
                <img src="flower-pot-1.png" alt="Orange Flower Pot">
                <h3>Flower Pot</h3>
                <div class="price">
                    <span class="current-price">20$</span>
                </div>
                <button class="add-to-cart">Add To Cart</button>
            </div>
        </div>
        <a href="shop.html" class="show-more">Show More <span class="arrow">→</span></a>
    </section>

    <footer>
        <div class="footer-content">
            <div class="footer-item">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#shop">Shop</a></li>
                    <li><a href="#category">Category</a></li>
                    <li><a href="#popular">Popular</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>

</html>
