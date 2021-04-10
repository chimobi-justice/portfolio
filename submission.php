<?php
    $firstname = $lastname = $email = $message = '';
    $err = ['firstname' => '', 'lastname' => '', 'email' => '', 'message' => ''];
    $res = ['message' => ''];


    if (isset($_POST['submit'])) {
        if (empty($_POST['firstname'])) {
            $err ['firstname'] = 'Required*';
        } else {
            $firstname = $_POST['firstname'];
            $err ['firstname'] = '';
        }

        if (empty($_POST['lastname'])) {
            $err ['lastname'] = 'Required*';
        } else {
            $lastname = $_POST['lastname'];
            $err ['lastname'] = '';
        }

        if (empty($_POST['email'])) {
            $err ['email'] = 'Required*';
        } else {
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $err ['email'] = 'Email must be valid email address';
            } else {
                $toEmail = "chimobi.justice@gmail.com";
                $subject = 'Submit Contact Form'. $firstname . $lastname;
                $body = "<h2>Filled contact form:</h2>
                         <h4>Name</h4><p>'. $firstname '</p>
                         <h4>Email</h4><p>'. $email '</p>
                         <h4>Message</h4><p>'. $message '</p>";
            
                
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-Type: text/html; charset=UTF-8". "\r\n";
                
                $headers .= "From: .$firstname . $email" .  "\r\n";
        
                if (mail($toEmail, $subject, $body, $headers)) {
                  $res['message'] = 'Your message has been sent, I\'ll get Back to you shortly!';
                } else {
                    $rse['message'] = 'ERROR! your message wasn\'t Sent, Please try again';
                }
            }
        }
        if (empty($_POST['message'])) {
            $err ['message'] = 'Required*';
        } else {
            $message = $_POST['message'];
            $err ['message'] = '';
        }

    } 

    
      
?>