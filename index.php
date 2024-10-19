<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kraftin'e</title>
    <link rel="icon" type="image/png" href="favicon.jpg">
    <link rel="stylesheet" href="index.css">
</head>
<body>

<!-- Hamburger Icon, Search Bar, and Icons -->
<div class="top-container">
    <span class="hamburger" id="hamburger">
        ☰
    </span>

    <input type="text" placeholder="Search entire store here..." class="search-bar">

    <img src="cart_icon-removebg-preview.png" id="cart">
    <img src="login_icon-removebg-preview.png" id="login">
</div>

<!-- Hidden Navigation Bar -->
<nav class="nav-bar" id="nav-bar">
    <ul>
        <li id="homenav"><a href="index.php">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Customization</a></li>
    </ul>
</nav>

<div class="header">
    <span class="logo-container">
        <img src="new.png" alt="Kraftin'e Logo" class="logo">
    </span>
    <span class="kraftine-container">
        <p id="kraftine">K r a f t i n ' e</p>
    </span>
    <span class="tagline-container">
        <p id="tagline">Made For You.</p>
    </span>
</div>

<div class="welcome">
    <h1 class="welcome-text">WELCOME TO OUR SHOP !</h1>
</div>

<!-- Featured Products -->
<span class="featured-prod">
        <ul>
            <span class="one">
                <img id="f1" src="f1.jpg">
                <p>POPPY</p>
                <P>₱ 200.00</P>
            </span>
            <span class="one">
            <img id="f2" src="f2.jpg">
                <p>DAHLIA</p>
                <P>₱ 200.00</P>
            </span>
            <span class="one">
            <img id="f3" src="f3.jpg">
                <p>WISTERIA</p>
                <P>₱ 200.00</P>
        </ul>
        <ul>
            <span class="two">
                <img id="f1" src="f1.jpg">
                <p>POPPY</p>
                <P>₱ 200.00</P>
            </span>
            <span class="two">
            <img id="f2" src="f2.jpg">
                <p>DAHLIA</p>
                <P>₱ 200.00</P>
            </span>
            <span class="two">
            <img id="f3" src="f3.jpg">
                <p>WISTERIA</p>
                <P>₱ 200.00</P>
            </span>
        </ul>
        <ul>
            <span class="three">
                <img id="f1" src="f1.jpg">
                <p>POPPY</p>
                <P>₱ 200.00</P>
            </span>
            <span class="three">
            <img id="f2" src="f2.jpg">
                <p>DAHLIA</p>
                <P>₱ 200.00</P>
            </span>
            <span class="three">
            <img id="f3" src="f3.jpg">
                <p>WISTERIA</p>
                <P>₱ 200.00</P>
            </span>
        </ul>
    </span>
</span>

<!-- About Us Section -->
<div id="about-us" class="about-container">
    <div class="about-logo">
        <img src="new.png" alt="Kraftin'e Logo" class="about-logo-img">
    </div>
    <div class="about-text">
        <h2>About Us</h2>
        <p>
            Kraftin'e is a Flower shop business that offers personalized handcraft and floral arrangements tailored to your preferences. 
            Our mission is to bring joy and elegance to your special moments, with unique, custom-made designs.
        </p>
        <p>
               Whether it's a gift, a celebration, or an event, Kraftin'e ensures every detail reflects your vision. 
            Made with passion, for you.
        </p>
    </div>
</div>
    
<!-- Footer -->
<div class="footer">
    <p>© 2024 Kraftin'e. All rights reserved.</p>
</div>

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

</body>
</html>