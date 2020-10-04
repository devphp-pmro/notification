<?php

    require_once __DIR__."/lib_ext/autoload.php";
    
    $mail =  new \Notification\Email();
    $mail->sendMail("Assunto teste","<p>Este é um email tete</p>",
      "devphp.pmro@gmail.com","Leonardo Magalhães",
      "magalhaesro1979@gmail.com","Leonardo");
  
  
    
    
    