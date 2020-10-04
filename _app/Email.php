<?php
    
    
    namespace Notification;
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    class Email
    {
        private $mail = \stdClass::class;
        
        public function __construct($smtpDebug, $host, $user, $pass, $smtpSecure,$port, $setFromEmail,$setFromName)
        {
            $this->mail = new PHPMailer(true);
            $this->mail->SMTPDebug = $smtpDebug;                 // Enable verbose debug output
            $this->mail->isSMTP();                               // Send using SMTP
            $this->mail->Host       = $host;                     // Set the SMTP server to send through
            $this->mail->SMTPAuth   = true;                      // Enable SMTP authentication
            $this->mail->Username   = $user;                     // SMTP username
            $this->mail->Password   = $pass;                     // SMTP password
            $this->mail->SMTPSecure = $smtpSecure;               // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $this->mail->CharSet = 'utf-8';
            $this->mail->isHTML(true);
            $this->mail->setLanguage('br');
            $this->mail->Port       = $port;                     // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            $this->mail->setFrom($setFromEmail, $setFromName);
    
    
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