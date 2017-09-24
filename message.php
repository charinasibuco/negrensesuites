<?php
    if(isset($_POST['submit']))
    {       
        $captcha = (isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : null);
        
        if(!$captcha){
            header("location: contact.php?messageSent=0#contact");
        }else {

            if(isset($_POST['email'])){
            $email = $_POST['email'];
            $name = $_POST['name'];
            $phoneNumber = $_POST['phoneNumber'];
            $message = $_POST['message'];
             list($username,$domain)=split('@',$email);
            if (!checkdnsrr($domain,'MX')) {
                header("location: contact.php?messageSent=3&email=$email&name=$name&phoneNumber=$phoneNumber&message=$message#contact");
                die();
                }
            }else{
                die();
            }
            
            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeC5QsTAAAAACGpmxtPdszkNgbRa-H8l7B6LwB7&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
            
            if($response.success == true)
            {
                $name = (isset($_POST['name']) ? trim($_POST['name']) : null);
                $email = (isset($_POST['email']) ? trim($_POST['email']) : null);
                $phoneNumber = (isset($_POST['phoneNumber']) ? trim($_POST['phoneNumber']) : null);
				$subject ="Customer's Message";
                $message = (isset($_POST['message']) ? trim($_POST['message']) : null);

                $msg = "Sender's Name : " . $name . "\r\n";
                $msg .="Email : " . $email . "\r\n";
				$msg .="Phone Number : " . $phoneNumber . "\r\n";
                $msg .="\r\nMessage: \r\n" . $message;
                $msg = wordwrap($msg,100);
				$headers ="From: Negrense Suites Site<no-reply@negrensesuites.com>";

                mail("negrensesuites@yahoo.com, prenda@yahoo.com, prenda1989@yahoo.com",$subject,$msg,$headers);
                
                header("location: contact.php?messageSent=1#contact");
            }
            else
            {
                header("location: contact.php?messageSent=0&email=$email&name=$name&phoneNumber=$phoneNumber#contact#contact");
            }
		
        }
		
    }
	
?>