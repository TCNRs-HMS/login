<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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
                    <button class="cartBtn">🛒</button>
                    <button class="logoutBtn" onclick="window.location.href='index.php'">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828490.png" 
                            style="width: 16px; height: 16px; vertical-align: middle;">
                    </button>
                </div>
            </div>
            <div class="navBottom">
                <ul class="menuList">
                    <li><a href="#home" onclick="window.location.href='shop.php'">Home</a></li>
                    <li><a href="#category" onclick="window.location.href='category.php'">Category</a></li>
                    <li><a href="#shop" onclick="window.location.href='shop.php'">Shop</a></li>
                    <li><a href="#popular" onclick="window.location.href='popular.php'">Popular <sup>Hot Offers</sup></a></li>
                    <li><a href="#recent" onclick="window.location.href='#recent'">Recent</a></li>
                </ul>
            </div>
        </nav>
    </header>


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
                <?php if (!isset($_SESSION['user_id'])): ?>
                <button class="add-to-cart" onclick="redirectToLogin()">Add To Cart</button>
                <?php else: ?>
                <button class="add-to-cart">Add To Cart</button>
                <?php endif; ?>
            </div>
            <!-- More product cards go here -->
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2024 - Made By Going-To Internet</p>
    </footer>

    <script src="app.js"></script>
</body>

</html>