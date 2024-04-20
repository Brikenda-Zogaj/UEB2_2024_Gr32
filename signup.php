<?php
function error($msg){
    echo '<p style="color:red;">'.$msg.'</p>';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $signup_first_name = $_POST["first_name"];
    $signup_last_name = $_POST["last_name"];
    $signup_username = $_POST["username"];
    $signup_email = $_POST["email"];
    $signup_password = $_POST["password"]; 

    
    $encoded_email = urlencode($signup_email);
    $hashed_password = password_hash($signup_password, PASSWORD_DEFAULT);

    setcookie('first_name', $signup_first_name, time() + (86400 * 30), '/');
    setcookie('last_name', $signup_last_name, time() + (86400 * 30), '/');
    setcookie('username', $signup_username, time() + (86400 * 30), '/');
    setcookie('email', $encoded_email, time() + (86400 * 30), '/');
    setcookie('password', $hashed_password, time() + (86400 * 30), '/');
    
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Form</title>
 
</head>

<body>
  <div class="background-container"></div>
  <div class="button-container"></div>

    <div class="wrapper login">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    <h2>Welcome!</h2>
                    <p>Get exclusive access to 
                    <br>  Metropol Real Estate <br><strong>For Free!</strong></p>
                </div>
            </div>
            <div class="col-right">
                <div class="login-form">
                    <h2>Sign Up</h2>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                      <label for="first_name">First Name:</label>
                      <input type="text" id="first_name" name="first_name" minlength="5" required>
              
                      <label for="last_name">Last Name:</label>
                      <input type="text" id="last_name" name="last_name" minlength="5" required>
              
                      <label for="username">Username:</label>
                      <input type="text" id="username" name="username" minlength="5" required>
              
                      <label for="email">Email:</label>
                      <input type="email" id="email" name="email" required>
              
                      <label for="password">Password:</label>
<input type="password" id="password" name="password" pattern="^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" 
       title="Password must contain at least one letter, one number, one special character, and be at least 8 characters long" required>

                        <br>

                        <p> <input type="submit" value="Sign In"> </p>

                        <span>Already have an account ?</span><a href="./logi.php" class="btn">Log In</a>                   
                       </form>
                  </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>