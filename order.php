<?php
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
 //    else {
 //     echo "Sorry, we dont have the Phone you are requesting. Please check back later. Thanks";
 // }
    
    
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
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="rave.js"></script>
</head>
<body>
    <div class="container">
        <div class="header btn-warning" align="center">
            <h1><a href="index_f.html">Phonewave Payment</a></h1>
            <p>A demo Payment Portal for Phonewave through Rave payment Gateway</p>
        </div>
        <div class="row address">
             <!-- <div class="col-md-"></div> -->
            <div class="col-md-8 col-sm-offset-2">
              <form class="form-horizontal " role="form" action="" method="GET">
                <fieldset class="panel panel-default" style="padding:15px;">

                  <!-- Form Name -->
                  <div class="panel-heading" style="margin-bottom:10px;">
                    <h3 class="panel-title">
                        Personal Details
                    </h3>
                    
                </div>

                   <!-- Text input-->
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Name</label>
                    <div class="col-sm-10">
                      <input type="text" placeholder="Please enter your Full Name" class="form-control" name="name">
                    </div>
                  </div>
                   <!-- Text input-->
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Email</label>
                    <div class="col-sm-10">
                      <input type="email" placeholder="Enter Your email address" class="form-control" id="email" name="email">
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group"> 
                    <label class="col-sm-2 control-label" for="textinput">Address</label>
                    <div class="col-sm-10">
                      <input type="text" placeholder="Address Line 1" class="form-control" name="address1">
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput" style="color: transparent">Line 2</label>
                    <div class="col-sm-10">
                      <input type="text" placeholder="Address Line 2" class="form-control" name="address2">
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">City</label>
                    <div class="col-sm-10">
                      <input type="text" placeholder="City" class="form-control" name="city">
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">State</label>
                    <div class="col-sm-4">
                      <input type="text" placeholder="State" class="form-control" name="state">
                    </div>

                    <label class="col-sm-2 control-label" for="textinput">Postcode</label>
                    <div class="col-sm-4">
                      <input type="text" placeholder="Post Code" class="form-control" name="post">
                    </div>
                  </div>



                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Country</label>
                    <div class="col-sm-10">
                      <input type="text" placeholder="Country" class="form-control" name="country">
                    </div>
                  </div>

                  

                </fieldset>
              </form>
              <div class="form-group">
                    <div align="center">
                      <div class="pull-center">
                        <a href="index_f.html"><div  class="btn btn-default">Cancel</div></a>
                        <div  class="btn btn-primary" id="next">Next</div>
                      </div>
                    </div>
                  </div>
            </div><!-- /.col-lg-12 -->

        </div><!-- /.row -->
    <div class="row hide_div payment">
        <div class="col-xs-12 col-md-4"></div>
        <div class="col-xs-12 col-md-4">
            <form action="rave.php" method="POST" accept-charset="utf-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Purchase Details
                    <span name="ref" style="font-size: 70%;"class="pull-right text-info">Ref No:<?php echo $ref;?></span></h3>
                        
                                
                </div>
                <div class="panel-body">

                    <form role="form" action="rave.php" method="POST" accept-charset="utf-8">
                        <div class="form-group">
                                    <label for="phoneName">
                                        EMAIL</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="form_email" value= "" id="form_email" readonly/>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phoneName">
                                        PHONE NAME</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="phoneName" value= "<?php  echo $phone_name; ?>" readonly/>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="price">
                                        PHONE PRICE</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="price" value= "<?php echo $prica; ?>" readonly/>

                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tax">
                                        TAX FEE</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="tax" value= "<?php echo $taxa; ?>" readonly/>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                    </div>
                                </div>
                                <div class="form-group  text-info hide_div">
                                    <label for="phoneName">
                                        REF NO</label>
                                    <div class="input-group ">
                                        <input style="border-color: transparent;" type="text" class="form-control" name="ref" value= "<?php echo $ref; ?>" readonly/>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="totalPrice">
                                        TOTAL</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="totalPrice" value= "<?php echo $total_price; ?>" readonly/>
                                        <input type="text" class="form-control hidden" name="totalPriceReal" value= "<?php echo $phone_price; ?>" readonly/>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                    </div>
                                </div>

                                <ul class="nav nav-pills nav-stacked">
                                    <li class="active"><a href="#"><span class="badge pull-right"><?php echo $total_price; ?></span> Final Payment</a>
                                    </li>
                                </ul>
                                <br/>
                                <input type="submit" class="btn btn-success btn-lg btn-block" value = "PAY">          
                    </form>
                    <div class="form-group" style="margin-top:50px;">
                    <div align="center">
                      <div class="pull-center">
                        <div  class="btn btn-warning" id="previous">Previous</div>
                      </div>
                    </div>
                  </div>
            </div>
                </div>
                </form>
            </div>
            
        </div>
         <div class="col-xs-12 col-md-4"></div>
    </div>
</div>
  
</body>
</html>