

<?php
// Start session
session_start();

// If submit booking form is clicked
if (isset($_POST['submit_booking'])) {
    // Store booking data in session
    $_SESSION['booking'] = array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'date' => $_POST['date'],
        'time' => $_POST['time'],
       
    );

    // Set success message in session
    $_SESSION['success_message'] = "Booking has been made successfully!";
}

// If clear booking action is triggered
if (isset($_GET['action']) && $_GET['action'] == 'clear_booking') {
    // Remove booking data from session
    unset($_SESSION['booking']);

    // Set success message in session
    $_SESSION['success_message'] = "Booking data has been cleared successfully!";

    // Redirect back to the initial page
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Assets/logo55.png" type="image/x-icon">
    <title>Booking Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Form styling */
        form {
            margin-bottom: 20px;
            width: 300px;
         height: 100%;
        }

        form label {
            display: block;
            margin-bottom: 10px;
         
        }

        form input[type="text"],
        form input[type="email"],
        form input[type="date"],
        form input[type="time"],
        form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Booking details styling */
        .booking-details {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            margin-top: 20px;
            background-color:rgba(67, 175, 55, 0.2);
        }

        .booking-details h3 {
            margin-top: 0;
        }

        .booking-details p {
            margin-bottom: 5px;
        }

        .booking-details a {
            color: #4CAF50;
            text-decoration: none;
        }

        .booking-details a:hover {
            text-decoration: underline;
        }
        .left-arrow {
            position: fixed;
            top: 10px;
            left: 10px;
            width: 40px; /* Adjust width as needed */
            height: 40px; /* Adjust height as needed */
            z-index: 1000; /* Ensure the arrow is above other content */
        }
    

    </style>
</head>
<body>
    
<div class="container">
<a class="left-arrow" href="properties.php">
        <img src="./Assets/arrow.webp" alt="Left Arrow" style="width: 100%; height: 100%;">
    </a>
    <div class="property-images">
        <h1>London Property </h1>
        <img src="./Assets/images/l4.jpeg" alt="Property 1">
        <img src="./Assets/images/l2.jpeg" alt="Property 2">
    </div>
   

  
    <!-- Check for success message -->
    <?php if (isset($_SESSION['success_message'])) : ?>
        <div class="success-message">
            <?php echo $_SESSION['success_message']; ?>
        </div>
        <?php unset($_SESSION['success_message']); ?>
    <?php endif; ?>
    <div class="booking-details">
    <!-- Booking Form -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h2>Booking </h2>
        <p style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:large">When do you want to book it?</p>
        <br>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br>
        
        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required><br>
        

        
        <input type="submit" name="submit_booking" value="Submit Booking">
    </form>
    </div>
    <!-- Display Booking Details -->
    <?php if (isset($_SESSION['booking'])) : ?>
        <div class="booking-details">
            <h3>Booking Details</h3>
            <p><strong>Name:</strong> <?php echo $_SESSION['booking']['name']; ?></p>
            <p><strong>Email:</strong> <?php echo $_SESSION['booking']['email']; ?></p>
            <p><strong>Date:</strong> <?php echo $_SESSION['booking']['date']; ?></p>
            <p><strong>Time:</strong> <?php echo $_SESSION['booking']['time']; ?></p>
           
            <p><a href="?action=clear_booking">Clear Booking</a></p>
        </div>
    <?php endif; ?>
</div>
</body>
</html>
