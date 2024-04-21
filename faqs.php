<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');

        body {
            background: #f6f6f6;
            font-family: "Rubik", sans-serif;
            margin: 0;
            padding: 0;
        }

        .box {
            width: 500px;
            margin: 100px auto;
            background: #fff;
            border-radius: 7px;
            box-shadow: 1px 2px 4px rgba(0, 0, 0, .3);
        }

        .box .heading {
            background: #7800CF;
            border-radius: 7px 7px 0px 0px;
            padding: 10px;
            color: #fff;
            text-align: center;
        }

        .faqs {
            padding: 0px 20px 20px;
        }

        ::-webkit-details-marker {
            float: right;
            margin-top: 3px;
        }

        details {
            background: #f6f6f6;
            padding: 10px 20px;
            border-radius: 7px;
            margin-top: 20px;
            font-size: 14px;
            letter-spacing: 1px;
            cursor: pointer;
        }

        details summary {
            outline: none;
        }

        .text {
            margin: 0;
        }
         
          .image-container {
            flex: 1;
            width: 100%;
        }

        .image-container img {
            max-width: 500px;
            height: 300px;
            border-radius: 7px;
        }
    </style>
</head>
<body>
<header>
<div class="image-container">
        <img src="./Assets/faq.jpeg" alt="Metropol Real Estate Image">
    </div>
</header>
<?php
$faqs = array(
    "How do I search for properties on Metropol Real Estate's website?" => "You can search for properties on our website by using the search bar located at the top of the page. Enter keywords such as location, property type, or price range to find listings that match your criteria.",
    "What types of properties does Metropol Real Estate offer?" => "We offer a wide range of properties including apartments, houses, condominiums, commercial spaces, and land for sale or rent.",
    "How do I schedule a property viewing?" => "To schedule a property viewing, you can contact us through phone or email, or fill out the contact form on our website. Our team will assist you in arranging a convenient time for the viewing.",
    "What information should I provide when scheduling a property viewing?" => "When scheduling a property viewing, please provide us with your contact information, preferred viewing date and time, and any specific requirements or preferences you may have.",
    "What is the process for renting or buying a property through Metropol Real Estate?" => "The process for renting or buying a property involves several steps including property search, viewing, negotiation, contract signing, and payment of fees or deposits. Our team will guide you through each step and ensure a smooth transaction.",
);
//Sortimi ksort
ksort($faqs);
?>
<div class="box">
    <p class="heading">FAQs</p>
    <div class="faqs">
        <?php foreach ($faqs as $question => $answer): ?>
            <details>
                <summary><?php echo $question; ?></summary>
                <p class="text"><?php echo $answer; ?></p>
            </details>
        <?php endforeach; ?>
        <a href="./index.php"> <h4>You can explore more in our website </h4></a>
    </div>
</div>

</div>
</body>
</html>