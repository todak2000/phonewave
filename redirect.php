<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>REDIRECT PAGE</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="index_f.css" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="header btn-info" align="center" style="border-radius:5px; padding: 10px 0 10px 0;">
            <h1>Phonewave Payment Confirmation</h1>
            <p>A demo Payment Portal for Phonewave through Rave payment Gateway</p>
        </div>
        

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

        // print_r($paymentStatus);
        print_r($chargeResponsecode.' '.$chargeAmount.' '.$chargeCurrency.' '.$currency);
        if(($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($chargeCurrency == $currency)) {
          // transaction was successful...
             // please check other things like whether you already gave value for this ref
          // if the email matches the customer who owns the product etc
          //Give Value and return to Success page
    }
            echo("<h3>PAYMENT SUCCESSFUL. THANK YOU! YOUR PHONE WILL BE DELEIVERED WITHIN 3- 7 DAYS FROM THIS CONFIRMATION</h3>");
        } 
        else {
            //Dont Give Value and return to Failure page
             echo("<h3>FAILED TRANSACTION. PLEASE TRY AGAIN</h3>");
        }
    }
        else {
      die('No reference supplied <a href="index_f.html"> <h1 class="btn-info"> Home</h1></a>');
    }

?>
       <a href="index.html" class="btn-default"> <h1 > Home</h1></a>
        <footer style="margin-top:60%;">
            <div class="row">
                <div class="col-lg-12">
                    <p align="center">Copyright © phonewave 2018</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>