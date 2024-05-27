<nav id="navbar" class="navbar">
    <button class="hamburger" onclick="toggleMenu()">☰</button>
    <div class="nav-logo">
       <a href="./index.php"> <img src="./Assets/logo5.png" alt="Logo"></a>
    </div>
    <div class="nav-links right" id="navLinks">
        <a href="./properties.php">Properties</a>
        <a href="./blog.php">Blog</a>
        <a href="./about.php">About Us</a>
        <a href="./contact.php">Contact</a>
        <a href="./faqs.php">
        <img src="./Assets/faqss.webp" alt="Log In" style="width: 30px; height: 30px; position:relative; top: 5px; right: 5px;">
        </a>
        <a href="./login.php">
        <?php
        if (isset($_SESSION['login']) && $_SESSION['login'] == 'true') {
            echo '<img src="./Assets/loged.webp" alt="Log In" style="width: 30px; height: 30px; position:relative; top: 5px; right: 5px;">';
        } else {
            echo '<img src="./Assets/signup.png" alt="Log In" style="width: 30px; height: 30px; position:relative; top: 5px; right: 5px;">';
        }
        ?></a>
    </div>
</nav>