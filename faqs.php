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
            background-image:url('Assets/faq-frequently-asked-question-concept-with-team-people-free-vector.jpg') ;
           
        }
        .box {
            width: 600px;
            
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
      
    </style>
</head>
<body>



<div class="box">
<?php include 'webAPI.php'; ?>
    <p class="heading">FAQs</p>
   
    <div class="faqs">
        <?php
        class FAQException extends Exception {}

        try {
            $faqs = array(
                "How do I search for properties on Metropol Real Estate's website?" => "You can search for properties on our website by using the search bar located at the top of the page. Enter keywords such as location, property type, or price range to find listings that match your criteria.",
                "What types of properties does Metropol Real Estate offer?" => "We offer a wide range of properties including apartments, houses, condominiums, commercial spaces, and land for sale or rent.",
                "How do I schedule a property viewing?" => "To schedule a property viewing, you can contact us through phone or email, or fill out the contact form on our website. Our team will assist you in arranging a convenient time for the viewing.",
                "What information should I provide when scheduling a property viewing?" => "When scheduling a property viewing, please provide us with your contact information, preferred viewing date and time, and any specific requirements or preferences you may have.",
                "What is the process for renting or buying a property through Metropol Real Estate?" => "The process for renting or buying a property involves several steps including property search, viewing, negotiation, contract signing, and payment of fees or deposits. Our team will guide you through each step and ensure a smooth transaction.",
            );

            
            if (empty($faqs)) {
                throw new FAQException("No FAQs available.");
            }

      
            ksort($faqs);

            foreach ($faqs as $question => $answer) {
                echo "<details>
                        <summary>$question</summary>
                        <p class='text'>$answer</p>
                      </details>";
            }

        } catch (FAQException $e) {
            echo "<p>Error: " . $e->getMessage() . "</p>";
        } catch (Exception $e) {
            echo "<p>General Error: " . $e->getMessage() . "</p>";
        }
        ?>
        <a href="./index.php"><h4>You can explore more on our website</h4></a>
    </div>
</div>



</body>

</html>

