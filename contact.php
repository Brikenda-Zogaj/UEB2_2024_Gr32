<?php
 $name = $email = $message =$success= "";
 $errors = array(
     'name' => '',
     'email' => '',
     'message' => ''
 );
 class FormValidator {
  
  const name_pattern = "/^[a-zA-Z-' ]*$/";
  const email_pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
  const max_length = 1600;

  
  public static function isValidName(string $name): bool|string {
      if (empty($name)) {
          return "Name is required";
      } elseif (!preg_match(self::name_pattern, $name)) {
          return "Name should contain only letters and whitespaces";
      }
      return true;
  }

  public static function isValidEmail(string $email): bool|string {
      if (empty($email)) {
          return "Email is required";
      } elseif (!preg_match(self::email_pattern, $email)) {
          return "Invalid format of email";
      }
      return true;
  }
  
   public static function isValidMessage(string $message, int $max_length = self::max_length): bool|string {
    $message = trim($message);
    if (empty($message)) {
      return "Message is required";
  } 
  
  $length = strlen($message);
  $chars_xtra=$length-$max_length;
  if ($length > $max_length) {
      return "Message should not exceed " . $max_length . " characters.You have ".$chars_xtra ." extra chars";
  }
  
  return true;
}

  public static function validateForm(array $formData): array {
      $errors = array(
          'name' => '',
          'email' => '',
          'message' => ''
      );
         // name error
    if (isset($formData['name'])) {
      $nameValidation = self::isValidName($formData['name']);
      if ($nameValidation !== true) {
          $errors['name'] = $nameValidation;
      }
  } 
  // email error
  if (isset($formData['email'])) {
      $emailValidation = self::isValidEmail($formData['email']);
      if ($emailValidation !== true) {
          $errors['email'] = $emailValidation;
      }
  } 
  // message error 
  if (isset($formData['message'])) {
      $messageValidation = self::isValidMessage($formData['message']);
      if ($messageValidation !== true) {
          $errors['message'] = $messageValidation;
      }
  } 

  return $errors;
}
}

//use of formValidator for when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $formData = $_POST;
  $errors = FormValidator::validateForm($formData);

  if (empty(array_filter($errors))) {
      
      $success = "Message sent successfully!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="../Assets/logo55.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
  <link href="Css\contact.css" rel="stylesheet">
 
  
</head>
<body onload="displayCurrentDate()">
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
  <div class="container">
    <p id="currentDate">Current Date:</p>
<div class="row py-5 g-3">
<div class="col-md-6 first_col">
  <h1 class="text-center mt-3">Contact Us</h1>
<form class="p-4 mt-5" id="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  <div class="mb-3">
    <label for="name" class="form-label" >Enter your name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="" >
    <small class="error"><?php echo $errors['name'];?></small>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address:</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="Your email" value="" >
    <small class="error"><?php echo $errors['email'];?></small>

  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Enter any message</label>
    <textarea class="form-control" id="message" rows="3" name="message" value=""></textarea>
    <small class="error"><?php echo $errors['message'];?></small>
  </div>
  <div class="mb-3">
    <input type="submit" name="submit" value="Send message" id="send_but">
    <p id="success"><?php echo $success; ?></p>

  </div>
</form>
</div>
<div class="col-md-6">
<img src="Assets\images\pp copy.webp" class="img-fluid">
</div>
<div  class="last_row">
<div class="row row-cols-1 row-cols-md-3 p-3 text-white ">
  
<div class="col">
  <h4>Phone number:</h4>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
  </svg><a href="tel:067-364-226" style="color:white;" >067-364-226</a><br>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
  </svg><a href="tel:056-788-954" style="color:white;">056-788-954</a>
</div>
<div class="col">
  <h4>Email:</h4>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
  </svg>
  <a href="mailto:emri@gmail.com" style="color:white; ">emri@gmail.com</a>
  
</div>
<div class="col">
  <h4>Address:</h4>
 <address>
 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
      <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
      <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
    </svg>
    <p>
      St.Bregu i Diellit,<br>
     Prishtine,Kosove,<br>
     10000 
    </p>
 </address>
 
</div>
</div>
</div>
</div>
  </div><br>

  <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11737.935844718217!2d21.165970700152144!3d42.65109868867257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ec1b6ecb2c1%3A0x7f0893730efce187!2sFakulteti%20Teknik!5e0!3m2!1sen!2s!4v1704217319153!5m2!1sen!2s" width="1300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <div class="table">
    <h2>Open Hours</h2>
    <table class="table table-bordered table-striped" cellspacing="10" cellpadding="10">
      <thead>
        <tr>
          <th>Day</th>
          <th>Opening Time</th>
          <th>Closing Time</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Monday</td>
          <td>9:00 AM</td>
          <td>5:00 PM</td>
        </tr>
        <tr>
          <td>Tuesday</td>
          <td>9:00 AM</td>
          <td>5:00 PM</td>
        </tr>
        <tr>
          <td>Wednesday</td>
          <td>9:00 AM</td>
          <td>5:00 PM</td>
        </tr>
        <tr>
          <td>Thursday</td>
          <td>9:00 AM</td>
          <td>5:00 PM</td>
        </tr>
        <tr>
          <td>Friday</td>
          <td>9:00 AM</td>
          <td>5:00 PM</td>
        </tr>
        <tr>
          <td>Saturday</td>
          <td>10:00 AM</td>
          <td>3:00 PM</td>
        </tr>
        <tr>
          <td style="background-color: lightblue;">Sunday</td>
          <td>Closed</td>
          <td>Closed</td>
        </tr>
      </tbody>
    </table>
  </div>
  <script>
    
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    
function displayCurrentDate() {
  const currentDate = new Date();

  const day = currentDate.getDate();
  const month = currentDate.getMonth() + 1;
  const year = currentDate.getFullYear();

  const formattedDate = `${year}-${month < 10 ? '0' + month : month}-${day < 10 ? '0' + day : day}`;

  document.getElementById('currentDate').innerText = `Current Date: ${formattedDate}`;
}
  </script>
 

</body>
</html>