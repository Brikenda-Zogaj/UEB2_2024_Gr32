<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuck Norris Jokes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333333;
        }
        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #45a049;
        }
        #joke {
            margin-top: 20px;
            font-style: italic;
            color: #666666;
        }
        img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Chuck Norris Jokes</h2>
  
    <p id="joke">
        <?php
        if (isset($_POST['get_joke'])) {
            $url = 'https://api.chucknorris.io/jokes/random';
            $response = file_get_contents($url);
            $joke = json_decode($response, true);
            echo $joke['value'];
        }
        ?>
    </p>
    <form method="post">
        <input type="hidden" name="get_joke" value="true">
        <img src="./Assets/image.png" alt="Chuck Norris">
        <button type="submit">Get Joke</button>
    </form>
</div>

</body>
</html>
