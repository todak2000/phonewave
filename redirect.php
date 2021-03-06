<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SUMMARY PAGE</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="index_f.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel|Exo|Ubuntu" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body style="font-family: 'Exo', sans-serif;">
    <div class="container">
        <!-- REDIRECTION PAGE HEADER -->
        <div class="header btn-info" align="center" style="border-radius:5px; padding: 10px 0 10px 0; cursor:default; pointer-events: none;">
             <h1 style="color: #232323; font-weight:1000; font-family: 'Ubuntu', sans-serif;">Phonewave Payment</h1>
            <p style="color: #ccc; font-weight:500; font-family: 'Abel', sans-serif;" class="btn-danger">A demo Payment Portal for Phonewave through Rave payment Gateway</p>
        </div>
        
<!-- PHP CODE STARTS HERE -->
        <?php
       
    if (isset($_GET['txref'])) {
        $ref = $_GET['txref'];
        $currency = "NGN"; //Correct Currency from Server

        $query = array(
            "SECKEY" => "FLWSECK-b8ac6947d5e13df6c14d760ab028cf2e-X",
            "txref" => $ref,
            "include_payment_entity" => "1"
        );

        $data_string = json_encode($query);
                
        $ch = curl_init('https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/xrequery');                                                                      
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                              
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        $response = curl_exec($ch);

        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($response, 0, $header_size);
        $body = substr($response, $header_size);

        curl_close($ch);

        $resp = json_decode($response, true);

        $paymentStatus = $resp['data']['status'];
        $chargeResponsecode = $resp['data']['chargecode'];
        $chargeAmount = $resp['data']['amount'];
        $chargeCurrency = $resp['data']['currency'];
        
        if(($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($chargeCurrency == $currency)) {
          // FOR A SUCCESSFUL TRANSACTION, THE ABOVE CONDITIONS SUCH AS THE RESPONSE CODE AND CURRENCY IS CONFIRMED, IT ECHO A SUCCESFUL TRANSACTION
            echo('<div align="center" class="col-md-12" style="margin-top:20px;  border: 1px solid #ccc; border-radius:5px;" >
        <img src="images/ok.png" style="margin-top:20px;" width="200px" height:"200px">
        <h4 style="margin-top:50px;">PAYMENT SUCCESSFUL. THANK YOU! <br> YOUR ITEM WILL BE DELEIVERED WITHIN 3- 7 DAYS FROM THIS CONFIRMATION</h4></div>');
        } 
        else {
            //IF THE ABOVE CONDITION IS NOT MET, IT ECHO A FAILED TRANSACTION
             echo('<div align="center" class="col-md-12" style="margin-top:20px; border: 1px solid #ccc; border-radius:5px;" >
        <img src="images/failed.png" style="margin-top:20px;" width="200px" height:"200px">
        <h4 style="margin-top:50px;">FAILED TRANSACTION. PLEASE TRY AGAIN</h4></div>');
        }
    }
    
?>
<!-- PHP CODE ENDS HERE -->
       <!-- FOOTER -->
       <footer style="margin-top:60%;">
            <div class="row">
                <div class="col-lg-12">
                    <p align="center">Copyright © phonewave 2018   <span class="btn-default"><a href="index.html"> Phonewave Homepage</a></span> </p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>