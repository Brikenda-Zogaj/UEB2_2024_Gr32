<?php 
session_start() ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="./Css/blog.css">
    <link rel="icon" href="./Assets/logo55.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    
   </head>
<body style="background:<?php echo $backgroundColor; ?>;">
<nav id="navbar" class="navbar">
        <div class="nav-logo">
          <a href="./index.php">  <img src="./Assets/logo5.png" alt="Logo"></a>
        </div>
        <div class="nav-links right">
           <!-- <a href="../index.html">Home</a> -->
           <a href="./properties.php">Properties</a>
            <a href="./blog.php">Blog</a>
            <a href="./about.php">About Us</a>
            <a href="./contact.php">Contact</a>
            <!-- <a href="./login.php">
                  <button type="submit" style="border-radius: 10px;">Log In</button>
              </a> -->
        </div>
    </nav>
    <?php 
// session_start();
if(isset($_SESSION['Visitors'])){
       $_SESSION['Visitors']++;
}
else
$_SESSION['Visitors']=1;

 ?>
  <main class="container">
    <div class="music d-flex flex-column align-items-center justify-content-center">

              <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16">
              <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2"/>
              <path fill-rule="evenodd" d="M12 3v10h-1V3z"/>
              <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1z"/>
              <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5m0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5m0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5"/>
              </svg><b>Play some background music while reading:</b></p>
              <form action="" method="post">
              <select id="audioSelect" name="audio">
              <option>Select your music:</option>
              <option value="./Assets/videoplayback.m4a">Relaxing</option>
              <option value="./Assets/videoplayback (1).m4a">Classical</option>

              </select>
              <button type="submit">Play</button>
              </form>
              <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['audio'])) {
              $audio = $_POST['audio'];
              if (!empty($audio)) {
              echo "<audio controls autoplay><source src='$audio' type='audio/mpeg'>Your browser does not support the audio element.</audio>";
              } else {
              echo "Please select an audio file.";
                     }
              }
              ?>
               </div>
        <hr>
        <i><h1 style="text-align: center;" id="blog-h1">Blog Posts</h1></i>
        <hr><br>
    <div class="card">
        <div class="image-gallery">
            <img src="./Assets/blog1.jpg" class="rounded" alt="Image 1">
            
        </div>
        <i><h2 style="text-align: center;"><u>TIPS FOR BUYING A PERFECT HOUSE FOR YOUR FAMILY</u></h2></i>
        <article class="text">
            <p>Any family would want to buy a comfortable and perfect house for their needs.
                 Unfortunately, not all families can find or afford their dream homes.
                  However, with a little effort and knowledge, it is possible to find the perfect home
                   for your family without breaking the bank.</p>

 <div class="read-more-text">Below see the tips to help you buy the perfect home for your family:
            <ul>
                <li style="list-style-type: square;"><b>Determine Your Budget</b>
                    <ul><li>The first step to buying a perfect home for your family is to determine your budget; this will help you know how much you can afford to spend on a house. You can use an online mortgage calculator to help you determine your budget. You should also factor in other costs such as stamp duty, legal fees, and moving costs.</li></ul>    
                </li>
                <li style="list-style-type: upper-roman;">Decide on the House You Want
                    <ul><li>
                        You can get a house based on the number of bedrooms you need, the size of the house, and the location. You will need a bigger place if you have a large family. 
                        Likewise, if you want to live in a prime location, you should be prepared to pay more.
                    </li></ul>
                </li>
                <li>Consider the Location
                    <ul><li>The location of the house is also an important consideration. It would help to choose a convenient place for you and your family. For instance, if you have young children, you might want to choose a house near good schools. Likewise, if you have elderly parents,
                         you might want to choose a home near hospitals or other medical facilities.</li></ul>
                </li>
                <li>Inspect the House</li>
                <li>Negotiate the Price</li>
                <li>Get a Home Loan</li>
                <li>Settle on a Date
                    <ul><li>Once you have negotiated the price and got a home loan, settling on a date is next; this is the date that you will exchange contracts and pay the deposit.
                         The date should be agreed upon by both the buyer and the seller.</li></ul>
                </li>
                <li>Exchange Contracts
                    <ul><li>On the settlement date, both the buyer and the seller will sign the contract of sale. This is a legally binding document that commits both parties to the sale.
                         Once the contract is signed, the buyer will pay the deposit, and the sale is finalize</li></ul>
                </li>
                <li>Move In</li>
            </ul>
        </div>

    
        </article>
        <span class="read-more-btn">Read More...</span>
    </div>
    <div class="card tekst">
        <div class="image-class"><img src="./Assets/blog3.jpg" alt="Nice picture!" class="rounded" ></div>
        <i><h2 style="text-align: center;"><u> Exploring the Heart of Every Home: The Beauty and Comfort of Houses</u></h2></i>
        <article class="text">
            <p>Houses, the sanctuary we return to after a long day, hold stories within their walls. They stand as more than just physical structures; they encapsulate memories, emotions, and a sense of belonging.
                 Within these walls, we find comfort, safety, and the freedom to express our truest selves.</p>
                 <div class="read-more-text">
                    <ul>
                        <li>The Essence of a House
                            <ul class="pa_stil"><li>Beyond bricks and mortar, a house embodies comfort and safety. It's where everyday routines unfold, where kitchens become the hub of shared meals and conversations,
                                 and where living rooms resonate with tales and laughter.</li></ul>    
                        </li>
                        <li>Personalizing Spaces
                            <ul class="pa_stil"><li>
                                Each house is a canvas waiting for personal touches. From minimalist elegance to vintage charm, home decor infuses character into spaces. The art lies in the details – the placement of art, choice of furniture,
                                 and curated aesthetics that transform a house into a personalized haven..
                            </li></ul>
                        </li>
                        <li>Adapting to Change
                            <ul class="pa_stil"><li>Houses evolve alongside us. Traditional dwellings blend with modern marvels – smart 
                                homes and sustainable designs reflect our changing needs and values, 
                                making our living spaces more efficient and mindful.
                             </li></ul>
                        </li>
                        <li>Conclusion
                    <ul class="pa_stil"><li>Our houses aren't just physical spaces; they're repositories of memories and emotions. They witness our joys and offer solace during tough times.
                         Let’s cherish these sanctuaries that shape our stories and define our sense of belonging.</li></ul>
                        </li>
                    </ul>
                </div>
            </article>
            <span class="read-more-btn" onclick="ndryshoNgjyren()">Read More...</span>
            </div>
        
            <div class="card">
                <div class="image-class"><img src="./Assets/blog4.jpg" class="rounded" ></div>
                <i><h2 style="text-align: center;"><u> Choosing the Right Decor for Your Home</u></h2></i>
                <article >
            <table cellspacing="2">
                <thead>
                    <tr>
                        <th>Topic</th>
                        <th>Description</th>
                        <th>Tips</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Color Schemes</td>
                        <td>Choosing the right colors for your home</td>
                        <td>Use color palettes, consider room functions</td>
                    </tr>
                    <tr>
                        <td>Furniture Arrangement</td>
                        <td>Optimizing space and flow</td>
                        <td>Arrange furniture for conversation areas</td>
                    </tr>
                    <tr>
                        <td>Lighting</td>
                        <td>Creating ambiance and functionality</td>
                        <td>Use a mix of ambient, task, and accent lighting</td>
                    </tr>
                    <tr>
                        <td id="cell">Textures and Fabrics</td>
                        <td>Add depth and coziness</td>
                        <td>Incorporate rugs, throws, and pillows</td>
                    </tr>
                    <tr>
                        <td>Art and Decorative Accents</td>
                        <td>Adding personality and style</td>
                        <td><a id="link-url" href="https://buildingandinteriors.com/" target="_blank">Showcase artwork, use decorative items</a></td>
                    </tr>
                  
                </tbody>
            </table>
                </div>
            
            <div class="card">
                <i><h2 style="text-align: center;"><u>The Perfect Blend: Luxury Living and Poolside Paradise</u></h2></i>
                <video width="" height="" controls>
                    <source src="./Assets/blogvideo.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        
            <div class="card">
                <div class="image-class"><img src="./Assets/img48.jpg" class="rounded" ></div>
                <i><h2 style="text-align: center;"><u> Faktor&euml;t q&euml; duhet t’i keni parasysh kur bleni sht&euml;pi</u></h2></i>
                <article class="text">
                    <p>Blerja e nj&euml; “sht&euml;pie t&euml; &Euml;ndrrave” &euml;sht&euml; nj&euml; nga arritjet jet&euml;sore të secilit njeri, e që kryeson listat e dëshirave tona të të gjitha kohërave.
                         Fare pak është me rëndësi nëse ëndërrojmë të kemi një shtëpi moderne, urbane, në periferi, me oborr të madh, 
                        apo me pishinë, pasi shumica prej nesh në fund shpreson të ketë një shtëpi ku ndjehemi rehat.</p>
        
         <div class="read-more-text" id="ndryshoTekstin">
            <abbr title="Kliko Tekstin p&euml;r ta ndryshuar at&euml;"> <p>Faktorët që ju duhet t’i keni parasysh kur bleni një shtëpi:</p>
                <ol>
                    <li>Hapësira e mjaftueshme
                        <ul class="pa_stil"><li>Shtëpia është mbretëresha e komforit, sepse ofron qetësi dhe privatësi. Ndërsa kopshti është nevoja jonë e përditshme si kontakti ynë i parë me natyrën. Mendoni mirë për hapësirën,
                             a keni dhoma gjumi të mjaftueshme që anëtarët e familjes suaj të mos i ndajnë ato dhe nëse ju mendoni se familja juaj mund të shtohet së shpejti ju duhet planifikuar një dhomë të vogël shtesë. 
                             Shikoni a ka vend të mjaftueshëm për të gjitha gjërat që i keni sot dhe ato që keni plan për t’i blerë më vonë, a ka parking, hapësirë nën kulm, 
                            kopsht të mjaftueshëm për periudhën e nxehtë të vitit kur ju dëshironi të kaloni shumë kohë në ambient të hapur.</li></ul>    
                    </li>
                    <li>Fqinjët dhe Zona Përreth
                        <ul class="pa_stil"><li>
                            Mos harroni, prona juaj, posa&ccedil;ërisht në Kosovë nuk do të jetë asnjëherë e vetme në një ishull. Ju gjithherë do të jeni pjesë e një komuniteti më të madh që do jetojë afër jush.
                             Këtë fakt duhet ta keni në mendje çdoherë para se të blini një shtëpi, sepse është e rëndësishme që ju të gjeni një lagje që i përshtatet nevojave tuaja para blerjes.
                              Pyetni paraprakisht për familjet që kanë blerë paraprakisht shtëpi në atë lagje dhe për politikat e shitjes së ndërtuesit të shtëpive. &ccedil;her&euml; para se të vendosësh për të blerë shëtitni përreth lagjes dhe merr informacione të nevojshme që ju tregojnë se ju do ndjeheni rahat në atë rrethinë. 
                              Shihni nëse lokacioni është i favorshëm për ju,
                             a jeni afër qendrave tregtare dhe qendrave mjekësore, a keni qasje në rrugët magjistrale.
                        </li></ul>
                    </li>
                    <li>Kostoja dhe investimi
                        <ul class="pa_stil"><li>Kjo nuk është faktori më emocionues por është i rëndësishëm. Krahasoni të gjitha ofertat, sepse në treg tani ofrohen opsione me çmime të ndryshme.
                             Edhe pse kostoja gjithmonë ka baraspeshën e saj si investim, përsëri duhet të keni kujdes që për parat e investuara e fitojnë atë që është më e mira për ju. Varësisht nga kërkesa, 
                             gjithmonë mund të gjeni ofertë të përshtatshme dhe me kthim të sigurtë në investim, nëse shikoni mirë aty ku duhet.
                             Që i bie se blerja e një shtëpie duhet të jetë një investim afatgjatë, i cili nuk e rëndon buxhetin e familjes dhe nuk është problemi por zgjidhja juaj jetësore.
                         </li></ul>
                    </li>
                </ol>
               </abbr>
           
        
        
                </div>
            </article>
            <span class="read-more-btn">Read More...</span>
            </div>
        
        </main>
              <br>
             
                   
        <form method="post">
        <label for="background_color">Select Background Color:</label>
        <select id="background_color" name="background_color">
            <option value="#d4afb9">Baby Pink</option>
            <option value="#d1cfe2">Baby Violet</option>
            <option value="#7ec4cf">baby Blue</option>
          
        </select>
       
    </form>
 
</body>
       <!-- footer -->
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
            <p><strong>Address:</strong>Prishtin&euml;</p>
  
            <p><strong>Phone:</strong> +383 49 685 045</p>
            <p><strong>Phone 2:</strong>+383 49 892 592</p>
            <p><strong>Email:</strong><a href="mailto:metropol@gmail.com" style="color:white; "> metropol@gmail.com</a></p>
            </div>
        </div>
        <br>
            <br>
            &copy; 2024 Metropol Estate. All rights reserved 
                </footer>
                <script>
                $(document).ready(function() {
    function updateBackground(color) {
        $.ajax({
            url: 'background.php', 
            type: 'POST', 
            data: { background_color: color }, 
            success: function(response) {
                $('body').css('background-color', color);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }

    
    $('#background_color').change(function() {
        var selectedColor = $(this).val(); 
        updateBackground(selectedColor); 
    });
});
</script>

     <script src="./Js/blog.js"></script>
</html>