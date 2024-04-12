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
<body style="background: #c9d7ddb1;">
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
            <a href="./login.php">
                  <button type="submit" style="border-radius: 10px;">Log In</button>
              </a>
        </div>
    </nav>
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
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $audio = $_POST['audio'];
              if (!empty($audio)) {
              echo "<audio controls autoplay><source src='$audio' type='audio/mpeg'>Your browser does not support the audio element.</audio>";
              } else {
              echo "Please select an audio file.";
                     }
              }
              ?>
              </div>
       </body>
</html>