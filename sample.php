<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
 <script>
  $(function() {
    $( "#input1" ).datepicker();
	 $( "#input2" ).datepicker();
  });
  </script>
  <style type="text/css">
body{overflow:hidden;}
</style>
<title>Untitled Document</title>
</head>

<body class="bodybackground">
<div class="container-fluid">
    <div class="row" id="top">
           <div class="col-sm-12">
            	<img id="topheader"  src="<?php echo base_url('assets/images/top1.png') ; ?>" />
            </div>
 	</div>
    	<div class="row" >
        	<div class="col-sm-4">
            </div>
            <div class="col-sm-4">
            	<div id="top">
                	<h3>Your Information</h3>
                    <form>
                    	<input type="text" placeholder="NAME" class="input_grp input" id="input" required/><br/>
                        <input type="text" placeholder="CHECK IN" class="input_grp input" id="input1" required />
                        <input type="text" placeholder="CHECK OUT" class="input_grp input" id="input2" required  />
                        <select name="roomType" id="input"  class="input_grp input" required>
                        <option class="input_grp input" value="">Choose Room Type</option>
                        <option class="input_grp input" value="superior" >Superior</option>
                        <option class="input_grp input" value="deluxe">Deluxe</option>
                        <option class="input_grp input" value="standardsingle">Standard Single</option>
                        <option class="input_grp input" value="standarddouble">Standard Double</option>
						</select>
                        <input type="text" placeholder="ROOM QUANTITY" class="input_grp input" id="input" required >
                        <select name="adultqty" id="input"  class="input_grp2 input" required>
						<option class="input_grp2 input" value="">Adult</option>
						<option class="input_grp2 input" value=1>1</option>
						<option class="input_grp2 input" value=2>2</option>
						<option class="input_grp2 input" value=3>3</option>
						<option class="input_grp2 input" value=4>4</option>
						</select>
                        <select name="childqty" id="input"  class="input_grp2 input" required>
						<option class="input_grp2 input" value="">Child</option>
						<option class="input_grp2 input" value=0>0</option>
   						<option class="input_grp2 input" value=1>1</option>
						<option class="input_grp2 input" value=2>2</option>
						<option class="input_grp2 input" value=3>3</option>
						<option class="input_grp2 input" value=4>4</option>
						</select>
                        <div id="btnmsg">
                            <input type="submit" class="btn" id="btncheck" value="RESERVE" />
                        </div>
                        
                    </form>
                 </div>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
    </div>
</body>
</html>