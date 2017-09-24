<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">

<title>PHP</title>

</head>
<body>
<nav class="navbar navbar-default navColor  navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header ">
     
	  <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target=".myNavbar" data-target-2=".targetToggle" id="toggle_toggle"  >
        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                 
      </button>
    </div>
    <div class="collapse navbar-collapse myNavbar navColor">
        <ul class="nav navbar-nav col-sm-2 ">
          <li id="floatNone"><a><span style="color:#54951f">ADMIN PAGE</span></a></li>
        </ul>
        <ul class="nav col-sm-8 about" id="about" >
          <li id="floatNone"><a href="<?php echo base_url('user_controller'); ?>">MANAGE USER</a></li>
          <li id="imagedis">
               <div class="navbar-brand" id="imgcntr">
                  <a id="floatNone" href="<?php echo base_url('pages/index'); ?>">
                      <img id="loadingImage" class="visible-lg-block" src="<?php echo base_url('assets/images/arrow.png') ; ?>" />
                  </a>
              </div>
         </li> 
          <li id="floatNone"><a href="<?php echo base_url('inquire'); ?>">INQUIRIES</a></li>
         </ul>
         <ul class="nav navbar-nav col-sm-2">   
          <li id="floatNone"><a href="<?php echo base_url('admin/logout'); ?>"><span style="color:#54951f">LOG OUT</span></a></li>
          </ul>
    </div>
  </div>
</nav>
		<div class="row" id="top">
             <div class="col-sm-12">
                  <img id="topheader"  src="<?php echo base_url('assets/images/top1.png') ; ?>" />
             </div>
     	</div>