<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metropol Real Estate</title>
    <link rel="icon" href="./Assets/logo55.png" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    </head>

<body>
    <!-- Navigation Bar -->
    <nav id="navbar" class="navbar">
        <button class="hamburger" onclick="toggleMenu()">☰</button>
        <div class="nav-logo">
           <a href="./index.php"> <img src="./Assets/logo5.png" alt="Logo"></a>
        </div>
        <div class="nav-links right" id="navLinks">
            <!-- <a href="../Pages/home.html">Home</a> -->
            <a href="./properties.php">Properties</a>
            <a href="./blog.php">Blog</a>
            <a href="./about.php">About Us</a>
            <a href="./contact.php">Contact</a>
            <a href="./login.php">
                <button type="submit">Log In</button>
            </a>
        </div>
    </nav>
    <?php 

if(isset($_SESSION['Visitors'])){
       $_SESSION['Visitors']++;
}
else
$_SESSION['Visitors']=1;

 ?>