<?php

error_reporting(0);
session_start();
include ('authenticate.php');


$userid =  htmlentities(htmlentities($_SESSION['uid'], ENT_QUOTES, "UTF-8"));



//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Methods: GET, POST');
//header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



$sms_mobile1=strip_tags($_POST['recipient_phoneno']);
$plus ='+';
$sms_mobile = $plus.$sms_mobile1;
$sms_message=strip_tags($_POST['message']);
$recipient_name=strip_tags($_POST['recipient_name']);
$sender_name=strip_tags($_POST['sender_name']);


$messaging = "Hi $recipient_name, $sender_name sent you Message. $sms_message";




$recipient_sid =strip_tags($_POST['recipient_uid']);



// do not send sms to your self
if ($recipient_sid == $userid){
echo 2;
exit();
}



include('data6rst.php');
// ensure that only your fiends will send you message


$st = $db->prepare("SELECT * FROM friends where reciever_id =:reciever_id and sender_id=:sender_id");
$st->execute(array(':reciever_id' => $recipient_sid, ':sender_id' => $userid));
$count = $st->rowCount();
$row= $st->fetch();
$stat = $row['status1'];

//if($stat == 1){


if($count != 1){
echo 3;
exit();
}


$st1 = $db->prepare("SELECT * FROM friends where reciever_id =:reciever_id and sender_id=:sender_id");
$st1->execute(array(':reciever_id' => $userid, ':sender_id' => $recipient_sid));
$count1 = $st1->rowCount();


if($count1 != 1){
echo 4;
exit();
}







$uss='your sms userame goes here';
$pss='your sms password goes here';
$sss='caremonger';
//$messaging = $sms_message;
$recipient_no = $sms_mobile;
$verbose = true;
$data = array(
        'username' => $uss,
        'password' => $pss,
        'message'  => $messaging,
        'sender'  => $sss,
        'verbose' => $verbose,
        'mobiles'  => $recipient_no  		
);


  // Send the POST request with cURL
$ch = curl_init('https://portal.nigeriabulksms.com/api/');
curl_setopt($ch, CURLOPT_POST, true);


$header[ ] = "Accept: text/xml,application/xml,application/xhtml+xml,";
$header[ ] = "text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5";
$header[ ] = "Cache-Control: max-age=0";
    $header[ ] = "Connection: keep-alive";
    $header[ ] = "Keep-Alive: 300";
    $header[ ] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $header[ ] = "Accept-Language: en-us,en;q=0.5";
    $header[ ] = "Pragma: "; // browsers keep this blank.



// also tried $header[] = "Accept: text/html";
curl_setopt ($ch,    CURLOPT_HTTPHEADER, $header);
//curl_setopt(curl, CURLOPT_USERAGENT, "Mozilla/4.0");


curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$result = curl_exec($ch); //This is the result from Textlocal
curl_close($ch);

$response = json_decode($result,true);
$stat=  $response['status'];

//print_r($response);

/*
Success Response: {“status”:”OK”,”count”:1,”price”:2}
*/



if($stat == 'OK') {

echo 1;
}
 else{
echo 0;
}

//print($result);









?>


