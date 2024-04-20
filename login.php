<?php
function error($msg){
    echo '<p style="color:red;">'.$msg.'</p>';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $login_email = $_POST['email']; 
    $login_password = $_POST['password'];
    
    $stored_email = isset($_COOKIE['email']) ? urldecode($_COOKIE['email']) : null; 
    $stored_password = isset($_COOKIE['password']) ? $_COOKIE['password'] : null;
    
    if ($login_email === $stored_email && password_verify($login_password, $stored_password)) {
        header("Location: home.php");
        exit;
    } else {
        error("Incorrect email or password.");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Form</title>

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
                    <br>
                    <br>
                    <h2>Log In</h2>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                      
                        if (isset($login_error)) {
                            echo '<p class="error">' . $login_error . '</p>';
                        }
                    }
                    ?>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <label for="Email">Email:</label>
                      <input type="email" id="email" name="email" required>
              
                      <label for="password">Password:</label>
                      <input type="password" id="password" name="password" required>
                      <p> <input type="submit" value="Log In"> </p>                 
                       </form>
                  
                </div>
            </div>
        </div>
    </div>
</body>

</html>