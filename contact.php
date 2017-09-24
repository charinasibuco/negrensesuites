<?php include('header.php') ?>
<body class="bodybackground">
	<div class="container-fluid"> 
		<div class="row" id="top">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-4 col-xs-12">
		<div>
	
				<div><script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:auto;width:100%;"><div id="gmap_canvas" style="height:500px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><div style="text-align:center;width:400px;padding-top:3px;"><a style="text-decoration:none;font-family:arial;font-size:11px;" href="http://wptiger.com?utm_source=map-embed&utm_medium=text&utm_campaign=google-maps" rel="nofollow"></a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:18,center:new google.maps.LatLng(10.663615552031986,122.9462526371567),mapTypeId: google.maps.MapTypeId.HYBRID};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(10.663615552031986, 122.9462526371567)});infowindow = new google.maps.InfoWindow({content:"<b>Negrense Suites</b><br/>Rosario Locsin Street<br/>6100 Bacolod" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script></div>
		</div>
			<div id="maptext">
              <h4>NEGRENSE SUITES</h4>
              <p>Rosario Locsin.,Bacolod City</p>
              <p>Negros Occidental,Philippines</p>
              <p>Telephone No:(034) 431 2576 / 704 2939</p>
              <p>Email Address: negrensesuites@yahoo.com</p>
			</div>
		</div>
		<div class="col-sm-4 col-xs-12">
			<div>
				<h3>Contact Form </h3>
                     <div class="error"> 
                     	<!--contact form-->
				            <?php
				                $messageConfirmation =( isset($_GET[ 'messageSent']) ? $_GET[ 'messageSent'] : null);
				                if(isset($_SESSION['booking_error_message']))
				                {

				                }
				                elseif($messageConfirmation)
				                {
				                    if($messageConfirmation==1 ){
				                        echo    "<div class='alert alert-success' data-dismiss='alert'>
				                                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
				                                    Thank you for contacting us! We'll respond as soon as possible.
				                                </div>";
				                    } else if($messageConfirmation==0) {
				                        echo    "<div class='alert alert-danger' data-dismiss='alert'>
				                                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
				                                    We are not able to send your message due to some error. Please try again.
				                                </div>";
				                    }else if($messageConfirmation==3) {
				                        echo    "<div class='alert alert-danger' data-dismiss='alert'>
				                                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
				                                    ".$_GET['email']." is not a valid email address.
				                                </div>";
				                    }  
				                }
				            ?>
                      </div>
                     <form action="message.php" method="post">
                        <input type="text" placeholder="NAME" class="input_grp input" id="input" name="name" value="<?php echo (isset($_REQUEST['name'])) ? $_GET['name'] : ''; ?>" pattern="[a-zA-Z\s]+" required/><br/>
                        <input type="email"  placeholder="EMAIL" class="input_grp input" id="input" name="email" value="<?php echo (isset($_REQUEST['email'])) ? $_GET['email'] : '' ; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/><br/>
                        <input type="text" placeholder="PHONE NUMBER" class="input_grp input" id="input" name="phoneNumber" value="<?php  echo (isset($_REQUEST['phoneNumber'])) ? $_GET['phoneNumber'] : '' ; ?>" pattern="[0-9\+]+" required/><br/>
                        <textarea  type="text" placeholder="MESSAGE" class="input_grp input" id="inputext" name="message" required ><?php  echo (isset($_REQUEST['message'])) ? $_GET['message'] : '' ; ?></textarea>
                        <div class="row" style="padding-top:10px;">
                            <div class="col-md-12">
                            <div class="g-recaptcha" data-sitekey="6LeC5QsTAAAAALc3K-Q9ZfgwicTM88BhJNmMvjcQ"></div>
                            </div>
                            <div class="col-md-12" id="btnmsg">
                                 <input type="submit" class="btn" id="btncheck" name="submit" value="SEND" />
                            </div>
                        </div>
                      </form>
			</div>
		</div>
		<div class="col-sm-2">
		</div>
	</div> 
</div>
<?php include('footer.php') ?>