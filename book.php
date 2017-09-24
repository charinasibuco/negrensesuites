<?php 
session_start();
include('header.php');
?>
<body class="bodybackground">
<div class="container-fluid">
	<div class="row" >
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4">
			<div id="top">
				<h3>Your Information</h3>
                <div class="error"> 
                     	<!--contact form-->
				            <?php
				                $messageConfirmation =( isset($_GET[ 'messageSent']) ? $_GET[ 'messageSent'] : null);
				                if($messageConfirmation)
				                {
				                    if($messageConfirmation==1 ){
				                        echo    "<div class='alert alert-success' data-dismiss='alert'>
				                                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
				                                    Reservation Succesfully sent! We'll respond as soon as possible.
				                                </div>";
				                    } else if($messageConfirmation==0) {
				                        echo    "<div class='alert alert-danger' data-dismiss='alert'>
				                                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
				                                    We are not able to send your request due to some error. Please try again.
				                                </div>";
				                    }else if($messageConfirmation==3) {
				                        echo    "<div class='alert alert-danger' data-dismiss='alert'>
				                                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
				                                    ".$_GET['email']." is not a valid email address.
				                                </div>";
				                    }  
				                }

				                if(isset($_SESSION['booking_error_message']) && $_SESSION['booking_error_message'] != '')
				                {
				                	echo "<div class='alert alert-danger' data-dismiss='alert'>".$_SESSION['booking_error_message']."</div>";
				                	$_SESSION['booking_error_message'] = '';
				                }
				            ?>
                      </div>
					<form action="booking.php" method="post"> 
                            <input type="text" placeholder="NAME" class="input_grp input" id="input" value="<?php echo (isset($_REQUEST['name'])) ? $_GET['name'] : ''; ?>" name="name" pattern="[a-zA-Z\s]+" required/><br/>
                            <input type="email" placeholder="EMAIL" class="input_grp input" id="input" value="<?php echo (isset($_REQUEST['email'])) ? $_GET['email'] : ''; ?>" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/><br/>
                            <input type="text" placeholder="PHONE NUMBER" class="input_grp input" id="input" value="<?php echo (isset($_REQUEST['phoneNumber'])) ? $_GET['phoneNumber'] : ''; ?>" name="phoneNumber" required/><br/>
                            <input type="text" placeholder="CHECK IN" class="input_grp input" id="datepicker" value="<?php echo (isset($_REQUEST['dateIn'])) ? $_GET['dateIn'] : ''; ?>" name="dateIn" required/>
                            <input type="text" placeholder="CHECK OUT" class="input_grp input" id="datepicker2" value="<?php echo (isset($_REQUEST['dateOut'])) ? $_GET['dateOut'] : ''; ?>" name="dateOut" required/>
                            <select name="type"  id="input"  class="input_grp input" required>
	                            <option class="input_grp input" value="">ROOM TYPE</option>
	                            <option class="input_grp input" value="GRAND DELUXE" <?php echo (isset($_REQUEST['type']) && $_REQUEST['type'] == 'GRAND DELUXE')?'selected="selected"':''; ?> >GRAND DELUXE</option>
	                            <option class="input_grp input" value="SUPERIOR DELUXE" <?php echo (isset($_REQUEST['type']) && $_REQUEST['type'] == 'SUPERIOR DELUXE')?'selected="selected"':''; ?>>SUPERIOR DELUXE</option>
	                            <option class="input_grp input" value="STANDARD DOUBLE" <?php echo (isset($_REQUEST['type']) && $_REQUEST['type'] == 'STANDARD DOUBLE')?'selected="selected"':''; ?>>STANDARD DOUBLE</option>
	                            <option class="input_grp input" value="STANDARD SINGLE" <?php echo (isset($_REQUEST['type']) && $_REQUEST['type'] == 'STANDARD SINGLE')?'selected="selected"':''; ?>>STANDARD SINGLE</option>
                            </select>
                            <input type="number" min="1" placeholder="ROOM QUANTITY" class="input_grp input" id="input" value="<?php echo (isset($_REQUEST['quantity'])) ? $_GET['quantity'] : ''; ?>" name="quantity" required>
                            <select name="capacity" id="adult"  class="input_grp input" required>
	                            <option class="input_grp2" value="0" >CAPACITY</option>
	                            <option class="input_grp2" value="1" <?php echo (isset($_REQUEST['capacity']) && $_REQUEST['capacity'] == 1)?'selected="selected"':''; ?> >1</option>
	                            <option class="input_grp2" value="2" <?php echo (isset($_REQUEST['capacity']) && $_REQUEST['capacity'] == 2)?'selected="selected"':''; ?> >2</option>
	                            <option class="input_grp2" value="3" <?php echo (isset($_REQUEST['capacity']) && $_REQUEST['capacity'] == 3)?'selected="selected"':''; ?> >3</option>
	                            <option class="input_grp2" value="4" <?php echo (isset($_REQUEST['capacity']) && $_REQUEST['capacity'] == 4)?'selected="selected"':''; ?> >4</option>
                            </select>
                            <div id="btnmsg">
                                <input type="submit" class="btn" id="btncheck" name="submit" value="RESERVE" />
                            </div>
                    </form>
			</div>
		</div>
		<div class="col-sm-4">
		</div>
	</div>
</div>

</body>
<?php include('footer.php') ?>