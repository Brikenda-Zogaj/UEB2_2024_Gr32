<?php 
session_start();
?>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $location=$_POST['searchInput'];
    switch($location){
        case 'Rio De Janeiro':
            header("Location: properties.php#RioDeJaneiro");
            exit();
        case 'Tokyo':
            header("Location: properties.php#Tokyo");
            exit();
        case 'London':
            header("Location: properties.php#London");
            exit();
        default:
            header("Location: properties.php"); // Default redirect if no location matches
            exit();
    }
} 
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
 <!-- Featured Properties Section -->
 <section class="featured-properties">
 <h2>Featured Properties</h2>
 <div class="property-grid">
              <div class="property-item">
                     <img src="./Assets/images/italy3.jpg" alt="Property 1">
                     <div class="property-info">
                         <h3>Elegant houses</h3>
                         <p>Modern houses with a view of the beach.</p>
                         <a href="#contact" class="btn btn-secondary">Contact Us</a>
                     </div>
                 </div>
                 <div class="property-item">
                     <img src="./Assets/images/marbella.jpg" alt="Property 1">
                     <div class="property-info">
                         <h3>Appartments</h3>
                         <p>Discover urban living at its finest apartments</p>
                         <a href="#contact" class="btn btn-secondary">Contact Us</a>
                     </div>
                 </div>
                 <div class="property-item">
                     <img src="./Assets/images/t4.jpeg" alt="Property 1">
                     <div class="property-info">
                         <h3>Village house</h3>
                         <p>Excape to the countryside living in village houses</p>
                         <a href="#contact" class="btn btn-secondary">Contact Us</a>
                     </div>
                 </div>
        </div>
 </section>
</body>
</html>