<?php
  if(!empty($_POST["send"])&& isset($_POST["name"]) && !empty($_POST["name"]) && isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["message"]) && !empty($_POST["message"])) {
    $name = strip_tags($_POST["name"]) ;
    $email = strip_tags($_POST["email"]);
    $message = strip_tags($_POST["message"]);


    $toEmail = "luc.leneuf@hotmail.fr";
    
    $mailHeaders = " message book - From: " . $name . " (". $email .")";
    mail($toEmail,$mailHeaders,$message);

    echo '<body onLoad="alert(\'Your message has been sent.\')">';
    echo '<meta http-equiv="refresh" content="0;URL=home.php">';
  
  }
    else{
      
      echo '<body onLoad="alert(\'One or more fields are missing.\')">';
      echo '<meta http-equiv="refresh" content="0;URL=contact.php">';
    }
?>