<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kraftin'e - Login</title>
    <link rel="icon" type="image/png" href="favicon.jpg">
    <link rel="stylesheet" href="login.css">
</head>
<body>

<!-- Hamburger Icon, Search Bar, and Icons -->
<div class="top-container">
    <span class="hamburger" id="hamburger">
        ☰
    </span>

    <input type="text" placeholder="Search entire store here..." class="search-bar">

    <img src="cart_icon.png" id="cart">
    <a href="login.php"><img src="login_icon.png" id="login"></a>
</div>

<!-- Hidden Navigation Bar -->
<nav class="nav-bar" id="nav-bar">
    <ul>
        <li id="homenav"><a href="index.php">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Events</a></li>
        <li id="about-us"><a href="#about-scroll">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Customization</a></li>
    </ul>
</nav>

<!-- Javascript -->
<script>
document.getElementById('hamburger').addEventListener('click', function() {
    var navBar = document.getElementById('nav-bar');
    if (navBar.style.display === 'block') {
        navBar.style.display = 'none';
    } else {
        navBar.style.display = 'block';
    }
});
</script>

<!-- Login -->
<form action="login_backend.php" method="post">
    <h2 id="login-text">LOGIN</h2>

    <label class="user-text">Username</label>
    <input type="text" name="username" placeholder="Username..." class="user-field" required>

    <label class="pass-text">Password</label>
    <input type="password" name="password" placeholder="Password..." class="pass-field" required>

    <button type="submit">SIGN IN</button>
</form>
    
</body>
</html>