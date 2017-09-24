<?php include('headerMain.php') ?>
<body class="bodybackground">
<div class="container-fluid">
  <div class="row">
      <div class="col-sm-4">
        </div>
      <div class="col-sm-4">
        <div id="light" align="center"><h4>To Complete your Reservation, Please fill out the form below</h4>
                <form action="booking.php" method="post">
                      <input type="text" placeholder="NAME" class="input_grp input" id="input" name="name" pattern="[a-zA-Z\s]+" required/><br/>
                      <input type="email" placeholder="EMAIL" class="input_grp input" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/><br/>
                        <div id="status"></div>
                        <input type="text" placeholder="PHONE NUMBER" class="input_grp input" id="input" name="phoneNumber" pattern="[0-9\+]+" required/><br/>
                        <input type="number" placeholder="ROOM QUANTITY" class="input_grp input" id="input" name="quantity" required >
                        <div id="btnmsg">
                            <input type="submit" class="btn" id="btncheck" name="submit" value="RESERVE" />
                            <input type="submit" class="btn" id="btncheck" value="CANCEL" onClick="info_close();" />
                        </div>
                        
                    </div>
                        <div id="fade" onClick="info_close();"></div>
        </div>
        <div class="col-sm-4">
        </div>
    <div class= "col-sm-12 col-xs-12">
        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="7000">
                  <div class="carousel-inner" role="listbox" >
                        <div class="item active carousel2">
                          <img class="carousel2" src="assets/images/front.jpg">
                        </div>
                        <div class="item carousel2">
                          <img class="carousel2" src="assets/images/service3.jpg">
                        </div>
                        <div class="item carousel2">
                          <img class="carousel2" src="assets/images/slide-4.jpg">
                        </div>
                        <div class="item carousel2">
                          <img class="carousel2" src="assets/images/slide-2.jpg">
                        </div>
                        <div class="item carousel2">
                          <img class="carousel2" src="assets/images/slide-3.jpg">
                        </div>  
                  </div>
            </div>   
    </div>
  </div>
  <div class="row sub_nav" id="scroller" style="margin-top:-1%">
      
      <div style="text-align:center" >
      <div class= "col-sm-2 col-xs-12">
          <label width="100%"  style="color:#54951f; padding-top:10px;" >RESERVATION INQUIRY</label>
            </div>

              <div class="col-sm-2 inner right">
                  <input class="input_grp form-control" width="100%" type="text" id="datepicker" placeholder="CHECK IN" name="dateIn" required/>
                     <span class="glyphicon glyphicon-calendar"></span>
               </div>
               <div class="col-sm-2  inner right">
                <input class="input_grp form-control"  width="100%" type="text" id="datepicker2" placeholder="CHECK OUT" name="dateOut" required/>
                    <span class="glyphicon glyphicon-calendar"></span>
               </div>
               <div class="col-sm-2">
                  <select name="type" id="roomType" class="input_grp" required>
                      <option class="input_grp" value="">ROOM TYPE</option>
                      <option class="input_grp input" value="GRAND DELUXE" >GRAND DELUXE</option>
                      <option class="input_grp input" value="SUPERIOR DELUXE">SUPERIOR DELUXE</option>
                      <option class="input_grp input" value="STANDARD DOUBLE">STANDARD DOUBLE</option>
                      <option class="input_grp input" value="STANDARD SINGLE">STANDARD SINGLE</option>
                  </select>
                  
               </div>
               <div class="col-sm-2">
                  <select name="capacity" id="adult"  class="input_grp" required>
                      <option class="input_grp2" value="">CAPACITY</option>
                      <option class="input_grp2" value=1>1</option>
                      <option class="input_grp2" value=2>2</option>
                      <option class="input_grp2" value=3>3</option>
                      <option class="input_grp2" value=4>4</option>
                  </select>
                  
                </div>
               <div class="col-sm-2 col-xs-12">
                      <input type="button" onClick="info_open();"  id ="btncheck"  value="RESERVE NOW" class="input_grp"  width="100%" style="text-align:center" /> 
                  </form>
               </div>
             </div>  
  </div>
    <div class="row displaybtn" >
      <div class="col-xs-12 display" id="display">
        <a href="book.php"><button id ="btncheck" class="input_grp btn" style="text-align:center; width:100%">RESERVE NOW</button></a>
      </div>
  </div>
    <div class="row three_images">
    <div class="col-sm-4 col_images">
      <img class ="imagesClass" src="assets/images/super.jpg" />
                <a  href="roomacc.php"><h3 class="link">Rooms & Accommodation</h3></a>
                <p class="images_content">Negrense Suites has 54 rooms with four(4) room classification. The rooms are designed to create an atmosphere of comfort and relaxation.
                 These rooms are equipped with amenities that guarantee you a relaxing and peaceful stay.</p>
        </div>
        <div class="col-sm-4 col_images">
            <img class ="imagesClass" src="assets/images/snack.jpg" />
                <a href="amenities.php"><h3 class="link">Amenities</h3></a>
                <p class="images_content">The hotel offers wide range of amenities to make sure that your stay can create a long lasting memory. It has a Restaurant, 
                  a Grand Ball Room, a Secured Parking Area, 24-Hour Security and CCTV Monitoring, and a Customer Representative who will make sure that your needs will be taken cared of. </p>
    </div>
    <div class="col-sm-4 col_images">
      <img class ="imagesClass" src="assets/images/1234.jpg" />
                 <a href="book.php"><h3 class="link">Book Now</h3></a>
                 <p class="images_content">We are looking forward to you stay with us.</p>
                   
    </div>
  </div>
</div>
<?php include('footer.php') ?>