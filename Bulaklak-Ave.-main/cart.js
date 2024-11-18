// cart.js
document.querySelectorAll(".add-to-cart").forEach(button => {
    button.addEventListener("click", () => {
        fetch("session_check.php")
            .then(response => response.json())
            .then(data => {
                if (data.loggedIn) {
                    // Redirect to the cart page
                    window.location.href = "cart.php";
                } else {
                    // Alert the user and redirect to login
                    alert("Please log in to add items to your cart.");
                    window.location.href = "login.php";
                }
            })
            .catch(error => {
                console.error("Error checking session:", error);
                alert("An error occurred. Please try again later.");
            });
    });
});