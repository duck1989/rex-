<?php 
   include 'auth_mpi_mac.php'; 
 
   $MerchantID="8220276805162"; 
   $TerminalID="90000112"; 
   $lidm="10000003"; 
   $purchAmt="2000"; 
   $txType="0"; 
   $Option="1"; 
   $Key="123456789012345678901234"; 
   $MerchantName="careline測試"; 
   $AuthResURL="http://local.astralweb.com.tw/shopping/index/successful/"; 
   $OrderDetail="測試訂單"; 
   $AutoCap="1"; 
   $Customize="1"; 
   $debug="0"; 
 
$MACString=auth_in_mac($MerchantID,$TerminalID,$lidm,$purchAmt,$txType,$Option,$Key,$MerchantName,$AuthResURL,$OrderDetail,$AutoCap,$Customize,$debug); 
   
      // echo (string) $MACString;
        
$URLEnc=get_auth_urlenc($MerchantID,$TerminalID,$lidm,$purchAmt,$txType,$Option,$Key,$MerchantName,$AuthResURL,$OrderDetail,$AutoCap,$Customize,$MACString,$debug); 

  echo $URLEnc;
 // echo"UrlEnc=".$URLEnc."\n";
// exit;
// $url = 'https://testepos.ctbcbank.com/auth/SSLAuthUI.jsp';
// $data = array('URLEnc ' => $URLEnc, 'merID ' => '225');
// var_dump($data);exit;
// use key 'http' even if you send the request to https://...
// $options = array(
//     'http' => array(
//         'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
//         'method'  => 'POST',
//         'content' => http_build_query($data)
//     ),
//     "ssl"=>array(
//         "verify_peer"=>false,
//         "verify_peer_name"=>false
//     )
// );
// $context  = stream_context_create($options);
// $result = file_get_contents($url, false, $context);
// if ($result === FALSE) { /* Handle error */ }

// echo $result;