<?php
include 'auth_mpi_mac.php'; 
      $EncRes= $_POST['URLResEnc'];
      $Key="123456789012345678901234"; 
      $debug="0"; 
      $EncArray=gendecrypt($EncRes,$Key,$debug); 
$MACString=''; 
     $URLEnc=''; 
    
      echo "<BR>\n"; 
      foreach($EncArray AS $name => $val){  
         echo $name ."=>". urlencode(trim($val,"\x00..\x08")) ."\n"; 
      }       
      $status = isset($EncArray['status']) ? $EncArray['status'] : ""; 
      $errCode = isset($EncArray['errcode']) ? $EncArray['errcode'] : ""; 
      $authCode = isset($EncArray['authcode']) ? $EncArray['authcode'] : ""; 
      $authAmt = isset($EncArray['authamt']) ? $EncArray['authamt'] : ""; 
      $lidm = isset($EncArray['lidm']) ? $EncArray['lidm'] : ""; 
      $OffsetAmt = isset($EncArray['offsetamt']) ? $EncArray['offsetamt'] : ""; 
      $OriginalAmt = isset($EncArray['originalamt']) ? $EncArray['originalamt'] : ""; 
      $UtilizedPoint = isset($EncArray['utilizedpoint']) ? $EncArray['utilizedpoint'] : ""; 
      $Option = isset($EncArray['numberofpay']) ? $EncArray['numberofpay'] : ""; 
      //紅利交易時請帶入prodcode 
      //$Option = isset($EncArray['prodcode']) ? $EncArray['prodcode'] : ""; 
      $Last4digitPAN = isset($EncArray['last4digitpan']) ? $EncArray['last4digitpan'] : ""; 
$pidResult= isset($EncArray['pidResult']) ? $EncArray['pidResult'] : ""; 
      $CardNumber = isset($EncArray['CardNumber']) ? $EncArray['CardNumber'] : ""; 
 
      $MACString = auth_out_mac($status,$errCode,$authCode,$authAmt,$lidm,$OffsetAmt,$OriginalAmt,$UtilizedPoint,$Option,
$Last4digitPAN,$Key,$debug);    
       
      //if  ($MACString == $EncArray['outmac']), then the result is right!  
?> 