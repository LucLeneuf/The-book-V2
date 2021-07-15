<?php
  if(!empty($_POST["send"])&& isset($_POST["name"]) && !empty($_POST["name"]) && isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["content"]) && !empty($_POST["content"])) {
    $name = strip_tags($_POST["name"]) ;
    $email = strip_tags($_POST["email"]);
    $message = strip_tags($_POST["content"]);


    $toEmail = "luc.leneuf@hotmail.fr";
    
    $mailHeaders = " message portfolio - From: " . $name . " (". $email .")";
    mail($toEmail,$mailHeaders,$message);

    echo '<body onLoad="alert(\'votre message a bien été envoyé\')">';
    echo '<meta http-equiv="refresh" content="0;URL=home.php">';
  
  }
    else{
      
      echo '<body onLoad="alert(\'un champ est manquant\')">';
      echo '<meta http-equiv="refresh" content="0;URL=contact.php">';
    }
?>