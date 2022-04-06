<?php
    $name = $_POST['naam'];
    $nummer = $_POST['nummer'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    // echo "<p>" . $naam . "</p>";
    // echo "<p>" . $email . "</p>";
    // echo "<p>" . $wachtwoord . "</p>";
    // echo "<p>" . $leeftijd . "</p>";
    // echo "<p>" . $opleiding . "</p>";
    // echo "<p>" . $plaats . "</p>";
    // echo "<p>" . $inhoud . "</p>";
    // echo "<p>" . $vak . "</p>";
    // echo "<p>" . $huiswerk_af . "</p>";
    // echo "<p>" . $mening_curio . "</p>";


    file_put_contents('contact.txt',



    "------------------------------" . "\n" .
    
    "V1: " . $name  . "\n" . "V2: " . $nummer . "\n" . "V3: " . $email . "\n" .  "V4: " . $message . "\n" .
      
    
    "\n" . "------------------------------",
    
    FILE_APPEND
    
    );

    $feedback = 'thank you for your message';
    header("location: ../index.php?msg=$feedback");
?>