<?php

$backgroundColorClass = isset($_COOKIE['background_color']) && $_COOKIE['background_color'] === 'dark' ? 'dark-background' : 'light-background';

$imageFileName1 = isset($_COOKIE['background_color']) && $_COOKIE['background_color'] === 'dark' ? 'black.webp' : 'green.jpeg';
// Vendosni cookie-në fillestare
$imageFileName2 = isset($_COOKIE['other_cookie']) && $_COOKIE['other_cookie'] === 'value' ? 'b.jpg' : 'b1.jpeg';
setcookie('other_cookie', 'value', time() + 3); 

echo '<meta http-equiv="refresh" content="3600">';
?>



<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="icon" href="./Assets/logo55.png" type="image/x-icon">
       <link rel="stylesheet" href="./Css/about.css">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

      
       <link rel="icon" href="./Assets/logo55.png" type="image/x-icon">
       <style>
          body {
            margin: 0;
              padding: 0;
              font-family: 'Arial', sans-serif;
              color: black;
              background-color: <?php echo isset($_COOKIE['background_color']) ? $_COOKIE['background_color'] : 'rgb(251, 249, 246)'; ?>;
              background-image: none;
      
   }
   
  /* Navbar */
.navbar {
    display: flex;
    justify-content: space-between;
    border-radius: 40px;
    align-items: center;
    padding: 2px 0;
    margin-left: 5px;
    margin-right: 5px;
    background-color: rgba(247, 252, 247, 0.6); 
    border-bottom: 1px solid #c6edc1;
  
}
.sticky {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000; 
  }
  

.nav-links {
    display: flex;
    align-items: center; 
    
    justify-content: space-between;
}
.nav-links a:hover {
            color: #45a049; 
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9);
        }

 .nav-links.right {
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
   
    display:inline;

    justify-content: right;
    align-items: center;
    font-size:25px;
    
    
}


.nav-logo img {
  height: 50px;

}

.nav-links a {
    margin: 0 10px;
    text-decoration: none;
    color: #181313;
     
}
.a, button {
    padding: 0px 10px;
    border: 2px solid rgba(63, 157, 63, 0.3);
    /* font-weight: bold; */
    font-size: 20px;
    background-color:rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    cursor: pointer;
}
.hamburger {
    display: none;
    background: none;
    border: none;
    font-size: 30px;
    cursor: pointer;}
  
         /* Responsive navbar */
         @media screen and (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: center;
                
            }
        
            .nav-links {
               
               
                width: 100%;
                margin-top: 10px;
            }
        
            .nav-logo img {
             height: 50px; /* Adjust the logo size */
         }
           
            
                .nav-links a {
                    display: block;
                    text-align: center;
             border-bottom: 1px solid gray;
                   padding: 10px;
                } 
                .nav-links button {
                 width: 100%;
                 padding: 10px;
             }
             .hamburger {
                 display: flex;
             }
         
             #navLinks {
                 display: none;
                 flex-direction: column;
             }
         
             .nav-links.right a {
                 display: block;
                 padding: 10px;
             }
            
        }

       
        .light-background {
            background-image: url(./Assets/green.jpeg);
        }

        .dark-background {
            background-image: url(./Assets/black.webp);
        }
   
       </style>
   </head>
   <body class="<?php echo $backgroundColorClass; ?>">
   
       <!-- Navigation Bar -->
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
            <a href="./login.php">
            <img src="./Assets/loged.webp" alt="Log In" style="width: 30px; height: 30px; position:relative; top: 0px; right: 5px;">
        </a>
        </div>
    </nav>

       
       <div class="page-title centred" style="background-image: url(./Assets/<?php echo $imageFileName2; ?>);">
              <div class="auto-container">
                  <div class="content-box clearfix">
                      <h1>About Us</h1>
                      <ul class="bread-crumb clearfix">
                          <li><a href="./index.php">Home</a></li>
                          <li>About Us</li>
                      </ul>
                  </div>
              </div>
          </div>
  <br>
       <div class="content">
              <img src="./Assets/ME.png" class="image align-left" alt="Image Description" style="border-radius: 20px; width: 400px;">
              
              <section id="about-us">
                     <div class="container">
                         <h1> <strong>Your Trusted Partner in Real Estate</strong></h1>
                         
                         <p>At Metropol, we believe that finding the perfect property should be a clear and uplifting experience. As pioneers in the real estate industry, we've been connecting individuals and businesses with their dream properties for over a decade.</p>
                         
                         <h2> Our Mission</h2>
                         <p>Our mission is to simplify the process of buying and selling real estate, ensuring a smooth, transparent, and enjoyable journey from the first viewing to the final handshake. Whether you're looking for a cozy family home, a modern urban apartment, or a commercial space to kickstart your business, RealE is here to guide you through every step.</p>

                         

                     </div>
                 </section>
                 
          </div>
        
          <section class="about-section">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-md-6">
                     <img src="./Assets/about-1.jpg" alt="Jessica Blake" class="about-image" >

                    <div class="experience-box">
                      <span class="years">20</span>
                      <p>Years of Experience</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="about-text">
                      <h2>ABOUT</h2>
                      <h1>Hi, I'm Jessica Blake</h1>
                      <p>Dolor sit amet consectetur elit sed do eiusmod tempor incididunt labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris aliquip ex ea commodo consequat duis aute irure.</p>
                      <ul>
                        <li>consectetur elit sed do eius</li>
                        <li>consectetur elit sed</li>

                      </ul>
                      <a href="./contact.php">
                      <button class="contact-btn"> Contact With Me</button>
                     </a>
                    </div>
                  </div>
                </div>
              </div>
              
            </section>



            <div class="teams-container">
              <h2 class="teams-title">Meet Our Excellent Team</h2>
              <div class="teams">
                  <div class="team-card">
                      <img src="./Assets/T2.jpg" alt="Jennifer Lawrence" class="agent-image">
                      <div class="team-info">
                          <h3>Brikenda Zogaj</h3>
                          <p>Ceo</p>
                          <div class="social-links">

                              <a href="https://www.linkedin.com/feed/"><img src="./Assets/linkedin.webp" alt="LinkedIn"></a>
                              <a href="your-github-url"><img src="./Assets/git.webp" alt="GitHub"></a>
                              <a href="your-facebook-url"><img src="./Assets/fb.webp" alt="Facebook"></a>
                          </div>
                      </div>
                  </div>
                  <div class="team-card">
                     <img src="./Assets/T1.jpg" alt="Jennifer Lawrence" class="agent-image">
                     <div class="team-info">
                         <h3>Jennif Lawrence</h3>
                         <p>Manager</p>
                         <div class="social-links">

                             <a href="https://www.linkedin.com/feed/"><img src="./Assets/linkedin.webp" alt="LinkedIn"></a>
                             <a href="your-github-url"><img src="./Assets/git.webp" alt="GitHub"></a>
                             <a href="your-facebook-url"><img src="./Assets/fb.webp" alt="Facebook"></a>
                         </div>
                     </div>
                 </div>
                 <div class="team-card">
                     <img src="./Assets/T3.jpg" alt="Jennifer Lawrence" class="agent-image">
                     <div class="team-info">
                         <h3>Gresa Syze</h3>
                         <p>Senior</p>
                         <div class="social-links">
         
                             <a href="https://www.linkedin.com/feed/"><img src="./Assets/linkedin.webp" alt="LinkedIn"></a>
                             <a href="https://github.com/Brikenda-Zogaj/UEB20_23_Gr7"><img src="./Assets/git.webp" alt="GitHub"></a>
                             <a href="mhttps://www.facebook.com/"><img src="./Assets/fb.webp" alt="Facebook"></a>
                         </div>
                     </div>
                 </div>
              </div>
          </div>
          
          
       

     

    


   
   
   <script src="./Js/about.js">  </script>


</body>


    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
               <div class="footer-logo">
                  
                   <img src="./Assets/logo5.png" alt="Company Logo" class="footer-logo">
                  
                 
                   <div class="social-icons">
                    <a href="https://www.linkedin.com/feed/"><img src="./Assets/linkedin.webp" alt="LinkedIn"></a>
                    <a href="https://github.com/Brikenda-Zogaj/UEB20_23_Gr7"><img src="./Assets/git.webp" alt="GitHub"></a>
                    <a href="https://www.facebook.com/"><img src="./Assets/fb.webp" alt="Facebook"></a>
 
                   </div>
                 </div>
               
               <div class="footer-resources">
                   <h3>Resources</h3>
                   <ul>
                   <li><a href="./index.php">Home</a></li>
                   <li><a href="./properties.php">Properties</a></li>
                   <li><a href="./about.php">About us</a></li>
                   <li><a href="./blog.php">Blog</a></li>
                   <li><a href="./contact.php">Contact Us</a></li>
               </ul>
               </div>
               
               <div class="footer-lokacioni">
                   <h3>Lokacioni</h3>
                   <p><strong>Address:</strong> Malisheve</p>
         
                   <p><strong>Phone:</strong> +383 49 685 045</p>
                   <p>+383 49 892 592</p>
                   <p><strong>Email:</strong> contact@realE.io</p>
               </div>
           </div>
           <br>
           &copy; 2024 Metropol Estate. All rights reserved 
     </footer>

   
    
    <script>
        function toggleMenu() {
            var navLinks = document.getElementById("navLinks");
            if (navLinks.style.display === "block") {
                navLinks.style.display = "none";
            } else {
                navLinks.style.display = "block";
            }
        }
        </script>
</html>
