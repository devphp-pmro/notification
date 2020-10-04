<?php

    require_once __DIR__ . "/../lib_ext/autoload.php";
    
    $mail =  new \Notification\Email(2,"","","","","","");
    $mail->sendMail("Assunto teste","<p>Este é um email tete</p>",
      "","",
      "","");
  
  
    
    
    