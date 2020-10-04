<?php

    require_once __DIR__ . "/../lib_ext/autoload.php";
    
    $mail =  new \Notification\Email(2,"mail.host.com","your@email.com","your-pass",
      "smtp secure (tls / ssl)","port (587)","from@email.com","From Name");
  
  
    
    
    