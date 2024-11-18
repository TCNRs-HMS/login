<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
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
                    <li><a href="#recent" onclick="window.location.href='recent.php'">Recent</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Category Section (full list) -->
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
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2024 - Made By Going-To Internet</p>
    </footer>

    <script src="app.js"></script>
</body>

</html>