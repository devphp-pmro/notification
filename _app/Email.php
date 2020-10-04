<?php
    
    
    namespace notification;
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    class Email
    {
        private $mail = \stdClass::class;
        
        public function __construct()
        {
            $this->mail = new PHPMailer(true);
            $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $this->mail->isSMTP();                                            // Send using SMTP
            $this->mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $this->mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $this->mail->Username   = 'devphp.pmro@gmail.com';                     // SMTP username
            $this->mail->Password   = 'devpmro2020';                               // SMTP password
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $this->mail->CharSet = 'utf-8';
            $this->mail->setLanguage('br');
            $this->mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            $this->mail->setFrom('devphp.pmro@gmail.com', 'Leonardo');
    
    
        }
        
        function sendMail($subject,$body,$replayEmail,$replayName,$adressEmail,$adressName)
        {
            $this->mail->Subject = (string) $subject;
            $this->mail->Body = $body;
            
            $this->mail->addReplyTo($replayEmail,$replayName);
            $this->mail->addAddress($adressEmail,$adressName);
            try {
                $this->mail->send();
            }catch (Exception $exception){
                echo "erro ao enviar email:{$this->mail->ErrorInfo} {$exception->getMessage()}";
            }
        }
    }