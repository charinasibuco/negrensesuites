<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>" />

<title>Untitled Document</title>
</head>

<body class="bodybackground">
<div class="container-fluid">
    <div class="row" id="top">
           <div class="col-sm-12">
            	<img id="topheader"  src="<?php echo base_url('assets/images/top1.png') ; ?>" />
            </div>
 	</div>
	 <div class="row" id="top" >
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4">
			<div id="top">
				<div class="sub_nav tableFunc">
					<table class="tableFunc ">
						<thead>
							<h1>Your Info!</h1>
								<tr>
									<td>Check In</td>
                                    <td>Check Out</td>
                                    <td>Room Type</td> 
                                    <td>Adult Quantity</td>
                                    <td>Child Quantity</td>
                                </tr>
                        </thead>
							<?php	
								while ($row = $query->unbuffered_row())
                                    {
                                ?>
                                <tr>
									<td><?php echo $row->checkin; ?></td>
                                    <td><?php echo $row->checkout; ?></td>
                                    <td><?php echo $row->type; ?></td> 
                                    <td><?php echo $row->adultqty; ?></td>
                                    <td><?php echo $row->childqty; ?></td>
                                </tr>
                                <?php
                                    }
                                ?>
                        </table>
                            <div class="">  
                                    <?php 
									foreach($roomAvailable->result_array() as $row)
									{
										echo $row['qty'];
									}
									
                                  /*  $roomAvailable=1;
                                    if($roomAvailable > 0)
                                    {
                                        echo "Selected Room is Available";
										echo "<br/>";
										echo "<a href=''>Book Now?</a>";
										echo "";
                                        }
                                        else
                                        {
                                            echo "Sorry this Room is already Reserve";
                                            }
                                 */   ?> 
                            </div>
				</div>
			</div>
        </div>
        <div class="col-sm-4">

        </div>
    </div>
</div>
</body>
</html>