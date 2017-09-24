<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>" />
<title>Untitled Document</title>
</head>

<body>
    <div class="container-fluid"> 
    	<div class="row">
        	<div class="col-sm-4">
                <div id="map">
                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:600px;"><div id="gmap_canvas" style="height:500px;width:600px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.map-embed.com" id="get-map-data">www.map-embed.com</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(10.663703620863812,122.9457607564392),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(10.663703620863812, 122.9457607564392)});infowindow = new google.maps.InfoWindow({content:"<b>NEGRENSE SUITE</b><br/>ROSARIO LOCSIN<br/>6100 Bacolod" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
               </div>
            </div>
        </div> 
   </div>
</body>
</html>