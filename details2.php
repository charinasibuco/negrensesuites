<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>" />
<title>Untitled Document</title>

</head>

    <body>
        <div class="container-fluid">
        	<div class="row">
        		  <div class="col-sm-8 col-xs-12">
                  		<h1>Rooms Available</h1>
                        <?php
                         foreach($query2->result() as $row)
                         {
                           ?>
                          <div>
                         		 <img src="<?php echo base_url('assets/images/'.$row->image) ?>" width="200px" height="150px" />
                           		 <p><span style="color:#54951f">Price:</span><?php echo $row->rate ; ?></p>
                          </div>
                   		<div style="float:right; position:relative;">
                           		 <h5>Room Type:</h5><?php echo $row->type ; ?>
                                 <h5>Maximum Adult:</h5><?php echo $row->max_adult ; ?>
                                 <h5>Maximum Child:</h5><?php echo $row->max_child ; ?>
                                 <h5>Quantity Availabl:</h5><?php echo $row->qty ; ?>
                          
                          		<h5>Description:</h5>
								<br />
								<?php echo $row->description ; ?>
                        </div> 
                    </div>
                                 
                       <?php }?>
                   <div class="col-sm-4 col-xs-12">
                   		 <?php	
							 	while ($row = $query->unbuffered_row())
								{
						  	?>
                      			<h5>Check In:</h5><?php echo $row->checkin; ?>
                                <h5>Check Out:</h5><?php echo $row->checkout; ?>
                                <h5>Room Type:</h5><?php echo $row->roomType; ?>
                                <h5>Adult Quantity:</h5><?php echo $row->adultqty; ?>
                                <h5>Child Quantity:</h5><?php echo $row->childqty; ?>
                           <?php
							}
							?>
                   </div>
                   </div>
                       
            	</div>
        	</div> 
    </body>
</html>