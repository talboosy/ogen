<?php 

if(isset($_POST['submit'])) {
    $email_var = $_POST['email'];
    $phone_var = $_POST['phone'];
    $textarea_var = $_POST['textarea'];
    $subject = 'Message from Contact Demo ';
    

    $mailTo = "talboosy@gmail.com";
    
   # $headers = "Phone: ".$phone;
  #  $txt = "You got mail! from - ".$email.".\n\n".$textarea;
    $body = "From: $email_var\n Phone: $phone_var \n \n Subject: $textarea_var"
   // if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
        if (mail ($mailTo, $subject, $body, $email)) {
            $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
        } else {
            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
        }
    //}
 }


?>