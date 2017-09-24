<?php
session_start();
    if(isset($_POST['submit']))
    {       
    	if(isset($_POST['email'])){
    		// $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    		$email = $_POST['email'];
    		$name = $_POST['name'];
            $phoneNumber = $_POST['phoneNumber'];
            $dateIn =  $_POST['dateIn'];
            $dateOut =  $_POST['dateOut'];
            $type =  $_POST['type'];
            $quantity =  $_POST['quantity'];
            $capacity =  $_POST['capacity'];
    		 list($username,$domain)=split('@',$email);
    		if (!checkdnsrr($domain,'MX')) {
			    header("location: book.php?messageSent=3&email=$email&name=$name&phoneNumber=$phoneNumber&dateIn=$dateIn&dateOut=$dateOut&type=$type&quantity=$quantity&capacity=$capacity#contact");
			    die();
			    //header('Location: index.php?error=Email+is+invalid.');
			}
    	}else{
    		die();
    	}
    	

		$name = (isset($_POST['name']) ? $_POST['name'] : null);
		$phoneNumber = (isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : null);
		$dateIn = (isset($_POST['dateIn']) ? $_POST['dateIn'] : null);
		$dateOut = (isset($_POST['dateOut']) ? $_POST['dateOut'] : null);
		$type =(isset($_POST['type']) ? $_POST['type'] : null);
		$quantity = (isset($_POST['quantity']) ? $_POST['quantity'] : null);
		$capacity = (isset($_POST['capacity']) ? $_POST['capacity'] : null);
		$subject="Customer's Reservation";
		$_SESSION['booking_error_message'] = '';
		

        if($name == '')
        {
        	$_SESSION['booking_error_message'] = 'Name is required!<br />'; 
			header("location: book.php?email=$email&name=$name&phoneNumber=$phoneNumber&dateIn=$dateIn&dateOut=$dateOut&type=$type&quantity=$quantity&capacity=$capacity#contact");
        }
        elseif($email == '')
        {
        	$_SESSION['booking_error_message'] = 'Email is required!<br />'; 
			header("location: book.php?email=$email&name=$name&phoneNumber=$phoneNumber&dateIn=$dateIn&dateOut=$dateOut&type=$type&quantity=$quantity&capacity=$capacity#contact");
        }
        elseif($phoneNumber == '')
        {
        	$_SESSION['booking_error_message'] = 'Phone Number is required!<br />'; 
			header("location: book.php?email=$email&name=$name&phoneNumber=$phoneNumber&dateIn=$dateIn&dateOut=$dateOut&type=$type&quantity=$quantity&capacity=$capacity#contact");
        }
        elseif($dateIn == '')
        {
        	$_SESSION['booking_error_message'] = 'Check In Date is required!<br />'; 
			header("location: book.php?email=$email&name=$name&phoneNumber=$phoneNumber&dateIn=$dateIn&dateOut=$dateOut&type=$type&quantity=$quantity&capacity=$capacity#contact");
        }
         elseif($dateOut == '')
        {
        	$_SESSION['booking_error_message'] = 'Check Out Date is required!<br />'; 
			header("location: book.php?email=$email&name=$name&phoneNumber=$phoneNumber&dateIn=$dateIn&dateOut=$dateOut&type=$type&quantity=$quantity&capacity=$capacity#contact");
        }
        elseif($type == '')
        {
        	$_SESSION['booking_error_message'] = 'Room Type is required!<br />'; 
			header("location: book.php?email=$email&name=$name&phoneNumber=$phoneNumber&dateIn=$dateIn&dateOut=$dateOut&type=$type&quantity=$quantity&capacity=$capacity#contact");
        }
        elseif($quantity == '')
        {
        	$_SESSION['booking_error_message'] = 'Room Quantity is required!<br />'; 
			header("location: book.php?email=$email&name=$name&phoneNumber=$phoneNumber&dateIn=$dateIn&dateOut=$dateOut&type=$type&quantity=$quantity&capacity=$capacity#contact");
        }
        elseif($capacity == 0)
        {
        	$_SESSION['booking_error_message'] = 'Capacity is required!<br />'; 
			header("location: book.php?email=$email&name=$name&phoneNumber=$phoneNumber&dateIn=$dateIn&dateOut=$dateOut&type=$type&quantity=$quantity&capacity=$capacity#contact");
		}
        else
        {
			$msg = "Sender's Name : " . $name . "\r\n";
			$msg .="Email : " . $email . "\r\n";
			$msg .="Phone Number : " . $phoneNumber . "\r\n";
			$msg .="Check In Date : " . $dateIn . "\r\n";
			$msg .="Check Out Date : " . $dateOut . "\r\n";
			$msg .="Room Type : " . $type . "\r\n";
			$msg .="Room Quantity : " . $quantity . "\r\n";
			$msg .="Person Capacity : " . $capacity . "\r\n";
			
			$msg = wordwrap($msg,100);
			$headers ="From: Negrense Suites Site<no-reply@negrensesuites.com>";

			mail("negrensesuites@yahoo.com, prenda@yahoo.com, prenda1989@yahoo.com",$subject,$msg,$headers);
			#header("location: book.php?messageSent=1&email=$email&name=$name&phoneNumber=$phoneNumber#contact");
			header("location: book.php?messageSent=1");
        }
    }
	else
            {
                header("location: book.php?messageSent=0&email=$email&name=$name&phoneNumber=$phoneNumber#contact");
            }
	
?>