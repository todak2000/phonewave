<?php
$curl = curl_init();
    $phone_name = $_POST["phoneName"];
    $email = $_POST["form_email"];
    $total_amount = $_POST["totalPriceReal"];
    $phone_name = $_POST["phoneName"];
    $ref_no = $_POST["ref"];
    $currency = "NGN";
    $PBFPubKey = "FLWPUBK-db9f2868c66c267fc27e71a995b0b7e7-X";
    $redirect_url = "https://phonewave.herokuapp.com/redirect.php";


    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/v2/hosted/pay",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => json_encode([
        'amount'=>$total_amount,
        'customer_email'=>$email,
        'currency'=>$currency,
        'txref'=>$ref_no,
        'PBFPubKey'=>$PBFPubKey,
        'redirect_url'=>$redirect_url,
        
      ]),
      CURLOPT_HTTPHEADER => [
        "content-type: application/json",
        "cache-control: no-cache"
      ],
    ));


    $response = curl_exec($curl);
    $err = curl_error($curl);

    if($err){
      die('Curl returned error: ' . $err);
    }

    $transaction = json_decode($response);

    if(!$transaction->data && !$transaction->data->link){
      print_r('API returned error: ' . $transaction->message);
    }

    // redirect to page so User can pay
    header('Location: ' . $transaction->data->link);
?>

