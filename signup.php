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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

body {
    margin: 0;
    font-family: 'Poppins', Arial, Helvetica, sans-serif;
    font-size: 16px;
    font-weight: 400;
    color: #666666;
    background: #eaeff4;
}

.background-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    background-image: url(analog-landscape-city-with-buildings\ \(1\).jpg);
    background-size: cover;
    background-repeat: no-repeat;
    opacity: 0.7; 
}
.wrapper {
    margin: 0 auto;
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.container {
    position: relative;
    width: 800px;
    height:550px;
    display: flex;
    background: #ffffff;
    box-shadow: 0 0 5px #999999;
}

.login .col-left,
.login .col-right {
    padding: 30px;
    display: flex;
}

.login .col-left {
    width: 60%;
    clip-path: polygon(0 0, 0% 100%, 100% 0);
    background: #2aa15f;
}

.login .col-right {
    padding: 60px 30px; 
    width: 50%;
    margin-left: -10%;
}

@media(max-width: 575px) {
    .login .container {
        flex-direction: column;
        box-shadow: none;
    }
    .login .col-left,
    .login .col-right {
        width: 100%;
        margin: 0;
        clip-path: none;
    }
    .login .col-right {
        padding: 30px;
    }
}

.login .login-text {
    position: relative;
    width: 100%;
    color: #ffffff;
}

.login .login-text h2 {
    margin: 0 0 15px 0;
    font-size: 30px;
    font-weight: 700;
}

.login .login-text p {
    margin: 0 0 20px 0;
    font-size: 16px;
    font-weight: 500;
    line-height: 22px;
}

.login .login-text .btn {
    display: inline-block;
    font-family: 'Poppins';
    padding: 7px 20px;
    font-size: 16px;
    letter-spacing: 1px;
    text-decoration: none;
    border-radius: 30px;
    color: #ffffff;
    outline: none;
    border: 1px solid #ffffff;
    box-shadow: inset 0 0 0 0 #ffffff;
    transition: .3s;
}
.login .login-text span {
    margin-right: 10px; 
}


.login .login-text .btn:hover {
    color: #2aa15f;
    box-shadow: inset 150px 0 0 0 #ffffff;
}

.login .login-form {
    position: relative;
    width: 100%;
}

.login .login-form h2 {
    margin: 0 0 15px 0;
    font-size: 22px;
    font-weight: 700;
}

.login .login-form p {
    margin: 0 0 10px 0;
    text-align: left;
    color: #666666;
    font-size: 15px;
}

.login .login-form p:last-child {
    margin: 0;
    padding-top: 3px;
}

.login .login-form p a {
    color: #2aa15f;
    font-size: 14px;
    text-decoration: none;
}

.login .login-form label {
    display: block;
    width: 100%;
    margin-bottom: 2px;
    letter-spacing: .5px;
}

.login .login-form p:last-child label {
    width: 60%;
    float: left;
}

.login .login-form label span {
    color: #ff574e;
    padding-left: 2px;
}

.login .login-form input {
    display: block;
    width: 100%;
    height: 35px;
    padding: 0 10px;
    outline: none;
    border: 1px solid #cccccc;
    border-radius: 30px;
}

.login .login-form input:focus {
    border-color: #ff574e;
}

.login .login-form button,
.login .login-form input[type=submit] {
    display: inline-block;
    width: 100%;
    margin-top: 5px;
    color: #2aa15f;
    font-size: 16px;
    letter-spacing: 1px;
    cursor: pointer;
    background: transparent;
    border: 1px solid #2aa15f;
    border-radius: 30px;
    box-shadow: inset 0 0 0 0 #2aa15f;
    transition: .3s;
}

.login .login-form button:hover,
.login .login-form input[type=submit]:hover {
    color: #ffffff;
    box-shadow: inset 250px 0 0 0 #2aa15f;
}

    </style>
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