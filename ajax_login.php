<?php
session_start();

function error_handler($errno, $errstr, $errfile, $errline, $errcontext) {
    $error_message = "Error [$errno]: $errstr in $errfile on line $errline";
    echo json_encode(['error' => $error_message]);
    exit;
}

set_error_handler("error_handler");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login_email = $_POST['email'];
    $login_password = $_POST['password'];

    $stored_email = isset($_COOKIE['email']) ? urldecode($_COOKIE['email']) : null;
    $stored_password = isset($_COOKIE['password']) ? $_COOKIE['password'] : null;

    if ($login_email === $stored_email && password_verify($login_password, $stored_password)) {
        $_SESSION['login'] = 'true';
        $redirect_from = isset($_SESSION['redirect_from']) ? $_SESSION['redirect_from'] : 'index.php';
        unset($_SESSION['redirect_from']);
        echo json_encode(['success' => true, 'redirect' => $redirect_from]);
    } else {
        $_SESSION['login'] = 'false';
        echo json_encode(['success' => false, 'message' => 'Incorrect email or password.']);
    }
    exit;
}
?>
