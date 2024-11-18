<?php
session_start();

// Redirect to login page if the user is not logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// Example cart items (replace with database or session-based logic as needed)
$cartItems = [
    ["name" => "Orange Flower Pot", "price" => 20],
    ["name" => "Purple Flower Pot", "price" => 25],
];

// Calculate total
$totalPrice = 0;
foreach ($cartItems as $item) {
    $totalPrice += $item["price"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Your Shopping Cart</h1>
        <a href="logout.php" class="logout-btn">Logout</a>
    </header>

    <main>
        <section class="cart">
            <?php if (count($cartItems) > 0): ?>
                <ul class="cart-list">
                    <?php foreach ($cartItems as $item): ?>
                        <li class="cart-item">
                            <h3><?php echo htmlspecialchars($item["name"]); ?></h3>
                            <p>Price: $<?php echo htmlspecialchars($item["price"]); ?></p>
                            <button class="remove-item-btn">Remove</button>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <p class="total">Total: $<?php echo $totalPrice; ?></p>
                <button class="checkout-btn">Proceed to Checkout</button>
            <?php else: ?>
                <p>Your cart is empty.</p>
            <?php endif; ?>
        </section>
    </main>
</body>

</html>
