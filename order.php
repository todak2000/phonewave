<?php
  
    // ON CLICK ON ANY BUY NOW BUTTON IN INDEX.HTML, ITS CURRESPONDING
    // ID FOR THE PHONE PRODUCT IS CALLED AND THE DATA PRESENTED FOR PAYMENT DETAILS

    // ID DETAILS FOR NEXUS PHONE
    if(isset($_GET['id']) && $_GET['id'] == "PH-001") {
        $phone_name = "NEXUS";
        $price = 30000;
        $prica = "&#x20A6;".$price;
        $tax_fee = 0.05*$price;
        $taxa = "&#x20A6;".$tax_fee;
        $phone_price = $tax_fee + $price;
        $total_price = "&#x20A6;".$phone_price;
         $ref = "PW-0012".rand();

    }
    // ID DETAILS FOR IPHONE
   elseif(isset($_GET['id']) && $_GET['id'] == "PH-002" ){
        $phone_name = "IPHONE";
        $price = 35000;
        $prica = "&#x20A6;".$price;
        $tax_fee = 0.05*$price;
        $taxa = "&#x20A6;".$tax_fee;
        $phone_price = $tax_fee + $price;
        $total_price = "&#x20A6;".$phone_price;
        $ref = "PW-0012".rand();
    }
    // ID DETAILS FOR SAMSUNG PHONE
    elseif (isset($_GET['id']) && $_GET['id'] == "PH-003") {
        $phone_name = "SAMSUNG";
        $price = 40000;
        $prica = "&#x20A6;".$price;
        $tax_fee = 0.05*$price;
        $taxa = "&#x20A6;".$tax_fee;
        $phone_price = $tax_fee + $price;
        $total_price = "&#x20A6;".$phone_price;
        $ref = "PW-0012".rand();
    }
    // ID DETAILS FOR HTC PHONE
    elseif (isset($_GET['id']) && $_GET['id'] == "PH-004") {
        $phone_name ="HTC";
        $price = 50000;
        $prica = "&#x20A6;".$price;
        $tax_fee = 0.05*$price;
        $taxa = "&#x20A6;".$tax_fee;
        $phone_price = $tax_fee + $price;
        $total_price = "&#x20A6;".$phone_price;
        $ref = "PW-0012".rand();
    }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PAYMENT</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="payment.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel|Exo|Ubuntu" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="rave.js"></script>
</head>
<body style="font-family: 'Exo', sans-serif;">
    <div class="container">
      <!-- HEADER -->
       <div class="header btn-info" align="center" style="border-radius:5px; padding: 10px 0 10px 0;">
             <h1 style="color: #232323; font-weight:1000; font-family: 'Ubuntu', sans-serif;">Phonewave Payment</h1>
            <p style="color: #ccc; font-weight:500; font-family: 'Abel', sans-serif;" class="btn-danger">A demo Payment Portal for Phonewave through Rave payment Gateway</p>
        </div>
        <!-- HEADER ENDS HERE -->
              <!-- MAIN CONTENT -->
              <!-- PERSONAL DETAILS DIV STARTS HERE -->
        <div class="row address" style="margin-top: 20px;">
            <div class="col-md-8 col-sm-offset-2">
              <!-- PERSONAL DETAILS FORM STARTS HERE -->
              <form class="form-horizontal " role="form" action="" method="GET">
                <fieldset class="panel panel-default" style="padding:15px;">
                  <div class="panel-heading" style="margin-bottom:10px;">
                    <h3 class="panel-title">Personal Details</h3>  
                </div>
                   <!-- NAME-->
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Name</label>
                    <div class="col-sm-10">
                      <input type="text" placeholder="Please enter your Full Name" class="form-control" name="name">
                    </div>
                  </div>
                   <!-- EMAIL-->
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Email</label>
                    <div class="col-sm-10">
                      <input type="email" placeholder="Enter Your email address" class="form-control" id="email" name="email">
                    </div>
                  </div>

                  <!-- ADDRESS -->
                  <div class="form-group"> 
                    <label class="col-sm-2 control-label" for="textinput">Address</label>
                    <div class="col-sm-10">
                      <input type="text" placeholder="Address Line 1" class="form-control" name="address1">
                    </div>
                  </div>

                  <!-- ADRESS CONTINUE-->
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput" style="color: transparent">Line 2</label>
                    <div class="col-sm-10">
                      <input type="text" placeholder="Address Line 2" class="form-control" name="address2">
                    </div>
                  </div>

                  <!-- CITY-->
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">City</label>
                    <div class="col-sm-10">
                      <input type="text" placeholder="City" class="form-control" name="city">
                    </div>
                  </div>

                  <!-- STATE-->
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">State</label>
                    <div class="col-sm-4">
                      <input type="text" placeholder="State" class="form-control" name="state">
                    </div>
                    <!-- POSTCODE-->
                    <label class="col-sm-2 control-label" for="textinput">Postcode</label>
                    <div class="col-sm-4">
                      <input type="text" placeholder="Post Code" class="form-control" name="post">
                    </div>
                  </div>
                  <!-- COUNTRY-->
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Country</label>
                    <div class="col-sm-10">
                      <input type="text" placeholder="Country" class="form-control" name="country">
                    </div>
                  </div>

                  

                </fieldset>
              </form>
              <!-- PERSONAL DETAILS FORM ENDS HERE -->

              <!-- PERSONAL DETAILS NAVIGATION: NEXT AND PREVIOUS BUTTONS  BEGINS HERE-->
              <div class="form-group">
                    <div align="center">
                      <div class="pull-center">
                        <a href="index.html"><div  class="btn btn-default">Cancel</div></a>
                        <div  class="btn btn-primary" id="next">Next</div>
                      </div>
                    </div>
                  </div>
                  <!-- PERSONAL DETAILS NAVIGATION: NEXT AND PREVIOUS BUTTONS  ENDS HERE-->
            </div><!-- /.col-lg-12 -->

        </div><!-- /.row -->
        <!-- PERSONAL DETAILS DIV ENDS HERE -->

        <!-- PURCHASE DETAILS DIV STARTS HERE -->
    <div class="row hide_div payment">
        <div class="col-xs-12 col-md-4"></div>
        <div class="col-xs-12 col-md-4">
          <!-- PURCHASE DETAILS FORM STARTS HERE -->
            <form action="rave.php" method="POST" accept-charset="utf-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Purchase Details
                    <span name="ref" style="font-size: 70%;"class="pull-right text-info">Ref No:<?php echo $ref;?></span></h3>               
                </div>
                <div class="panel-body">

                    <form role="form" action="rave.php" method="POST" accept-charset="utf-8">
                      <!-- EMAIL-->
                        <div class="form-group">
                           <label for="phoneName">EMAIL</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" name="form_email" value= "" id="form_email" readonly/>
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                </div>            
                          </div>
                          <!-- PHONE NAME-->
                        <div class="form-group">
                             <label for="phoneName"> PHONE NAME</label>
                               <div class="input-group">
                                  <input type="text" class="form-control" name="phoneName" value= "<?php  echo $phone_name; ?>" readonly/>
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                </div>                 
                          </div>        
                            <!-- PHONE PRICE-->         
                        <div class="form-group">
                            <label for="price">PHONE PRICE</label>
                               <div class="input-group">
                                  <input type="text" class="form-control" name="price" value= "<?php echo $prica; ?>" readonly/>
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                </div>                  
                          </div>   
                          <!-- TAX FEE-->      
                        <div class="form-group">
                            <label for="tax">TAX FEE</label>
                               <div class="input-group">
                                  <input type="text" class="form-control" name="tax" value= "<?php echo $taxa; ?>" readonly/>
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>      
                                </div>     
                          </div>
                          <!-- REF NO--> 
                        <div class="form-group  text-info hide_div">
                            <label for="phoneName"> REF NO</label>
                                <div class="input-group ">
                                    <input style="border-color: transparent;" type="text" class="form-control" name="ref" value= "<?php echo $ref; ?>" readonly/>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                </div>
                          </div>
                          <!-- TOTAL--> 
                        <div class="form-group">
                            <label for="totalPrice">TOTAL</label>
                              <div class="input-group">
                                 <input type="text" class="form-control" name="totalPrice" value= "<?php echo $total_price; ?>" readonly/>
                                   <input type="text" class="form-control hidden" name="totalPriceReal" value= "<?php echo $phone_price; ?>" readonly/>
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>            
                              </div>      
                          </div>
                          <!-- TOTAL II--> 
                          <ul class="nav nav-pills nav-stacked">
                              <li class="active"><a href="#"><span class="badge pull-right"><?php echo $total_price; ?></span> Final Payment</a></li>
                          </ul><br/>
                          <!-- PAYMENT BUTTON--> 
                          <input type="submit" class="btn btn-success btn-lg btn-block" id="pay_buttton" value = "PAY">                   
                    </form>
                    <!-- PURCHASE DETAILS FORM ENDS HERE -->

                     <!-- PERSONAL DETAILS NAVIGATION: PREVIOUS BUTTONS  STARTS HERE-->
                    <div class="form-group" style="margin-top:50px;">
                      <div align="center">
                        <div class="pull-center">
                          <div  class="btn btn-warning" id="previous">Previous</div>
                        </div>
                      </div>
                  </div>
                   <!-- PURCHASE DETAILS NAVIGATION: PREVIOUS BUTTON  ENDS HERE-->
                </div>
            </div>
          </form>
        </div>
            
        </div>
         <!-- PURCHASE DETAILS DIV ENDS HERE -->
         <div class="col-xs-12 col-md-4"></div>
    </div>
</div>
  
</body>
</html>