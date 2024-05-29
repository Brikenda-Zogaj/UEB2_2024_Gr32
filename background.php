<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['background_color'])) {
    setcookie("background_color", $_POST['background_color'], time() + (86400 * 30), "/"); // 30 ditë skadim
}


$backgroundColor = isset($_COOKIE['background_color']) ? $_COOKIE['background_color'] : 'white';
?>
 <?php
              $colors = array(
                "#d4afb9" => "Baby Pink",
                "#d1cfe2" => "Baby Violet",
                "#7ec4cf" => "Baby Blue"
            );
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $selected_color = $_POST["background_color"];
            
                sort($colors);
            }
              ?>
