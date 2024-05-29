<?php
function error($msg){
    echo '<p style="color:red;">'.$msg.'</p>';
}

function customErrorHandler($errno, $errstr, $errfile, $errline) {
    echo "<b>Gabimi:</b> [$errno] $errstr - Në rreshtin $errline të skedarit $errfile<br />";
}

set_error_handler("customErrorHandler");

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
    
    echo json_encode(['success' => true, 'message' => 'Regjistrimi është kryer me sukses.']);
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
        background-image: url('./Assets/sign.jpeg');
        
    }

    .background-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        background-image: url('./Assets/signup.png');
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
        width: 700px;
        height:550px;
        display: flex;
        border-radius: 30px;
        background: #ffffff;
        box-shadow: 0 0 5px #999999;
       
        background-color: #f0f0f0;
    }

    .col-right {
        padding: 30px;
        width: 50%;
    }

    .login-form {
        width: 100%;
    }

    .login-form h2 {
        margin: 0 0 15px 0;
        font-size: 22px;
        font-weight: 700;
        text-align: center;
    }

    .login-form label {
        display: block;
        margin-bottom: 10px;
    }

    .login-form input {
        width: calc(100% - 20px);
        height: 35px;
        padding: 0 10px;
        margin-bottom: 10px;
        border: 1px solid #cccccc;
        border-radius: 30px;
        outline: none;
        background-color: #f8f8f8;
    }

    .login-form input:focus {
        border-color: #ff574e;
    }

    .login-form .submit-container {
        margin-top: 20px;
        text-align: center;
    }

    .login-form .submit-container input[type="submit"] {
        width: 150px;
        background-color: #2aa15f;
        color: #ffffff;
        border: none;
        border-radius: 30px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .login-form .submit-container input[type="submit"]:hover {
        box-shadow: inset 0 0 0 0 #2aa15f;
    transition: .3s
    }

    .login-form .login-link {
        display: block;
        text-align: center;
        margin-top: 20px;
        font-size: 14px;
        color: #2aa15f;
        text-decoration: none;
    }

    .login-form .login-link:hover {
        text-decoration: underline;
       background-color: #238e4b;
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


   
    </style>
  <script>
   
    function handleSignUp(event) {
        event.preventDefault();

        var formData = new FormData(document.getElementById('signup-form'));

        if (!validateForm(formData)) {
            return; 
        }

        var xhr = new XMLHttpRequest();
        xhr.open('POST', '<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        alert(response.message); 
                        window.location.href = 'index.php';
                    } else {
                        alert(response.message);
                    }
                } else {
                    alert('Error: ' + xhr.status); 
                }
            }
        };

        xhr.send(new URLSearchParams(formData).toString());
    }

    function validateForm(formData) {
        var requiredFields = ['first_name', 'last_name', 'username', 'email', 'password'];
        for (var i = 0; i < requiredFields.length; i++) {
            var fieldName = requiredFields[i];
            var fieldValue = formData.get(fieldName);
            if (!fieldValue) {
                alert('Please fill out all required fields.');
                return false;
            }
        }

        var email = formData.get('email');
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert('Please enter a valid email address.');
            return false;
        }

        return true;
    }


</script>

</head>
<body>
    <div class="wrapper login">
        <div class="container">
            <div class="col-right">
                <div class="login-form">
                    <h2>Sign Up</h2>
                    <!-- Form starts here -->
                    <form id="signup-form" method="post" action="">
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

                        <p> <input  type="submit" value="Sign In" onclick="handleSignUp(event)" > </p>
                        <span>Already have an account ?</span><a href="./login.php" class="btn">Log In</a>
                    </form>
                    <!-- Form ends here -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>




