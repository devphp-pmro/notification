<?php

    require_once __DIR__ . "/../lib_ext/autoload.php";
    
    $mail =  new \Notification\Email(2,"smtp.gmail.com","devphp.pmro","devpmro2020","587","devphp.pmro@gmail.com","Dev PGO");
    $mail->sendMail("Assunto teste","<p>Este é um email tete</p>",
      "devphp.pmro@gmail.com","Leonardo Magalhães",
      "magalhaesro1979@gmail.com","Leonardo");
  
  
    
    
    