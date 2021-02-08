<?php


/*
The phpmailer keyword must be declared in the outermost or topmost scope of a file (the global scope) 
or inside namespace declarations. This is because the importing is done at compile time and not runtime.
 otherwise it will throw error syntax error, unexpected 'use' (T_USE)
*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//error_reporting(0);


header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


$email_subject=strip_tags($_POST['email_subject']);
$email_message=strip_tags($_POST['email_message']);

$recipient_name=strip_tags($_POST['recipient_name']);
$sender_name=strip_tags($_POST['sender_name']);
$email_address=strip_tags($_POST['recipient_email']);


session_start();
$userid =  htmlentities(htmlentities($_SESSION['uid'], ENT_QUOTES, "UTF-8"));





$recipient_sid =strip_tags($_POST['recipient_uid']);




// do not send email to your self
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







//$output = array();


// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

$messaging = $email_message;

try {
    
    
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

    //Server settings
    $mail->SMTPDebug = 0;                                       // 0 - Disable Debugging, 2 - Responses received from the server
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'mail.qbtut.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'support@qbtut.com';                     // SMTP username
    $mail->Password   = 'YOUR-PASSWORD Goes here';                               // SMTP password
    $mail->SMTPSecure = 'tls';//PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption, `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Sender and sender name
    //$mail->setFrom('support@qbtut.com', 'fred boy');

    $mail->setFrom('support@qbtut.com', "$sender_name @Mummy Care");

//recipient email address and name
    //$mail->addAddress('ese@gmail.com', 'fred recipients');     // Add a recipient
      $mail->addAddress($email_address, $recipient_name);     // Add a recipient
  
    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = $email_subject;
    $mail->Body = $messaging;
    $mail->AltBody = $messaging; // for Plain text for non-HTML mails

    $mail->send();
    //echo 'Message successfully sent';
    
    



echo 1;


} catch (Exception $e) {
 //echo "Message not sent. Error: {$mail->ErrorInfo}";
/*

$output[] = array(
"message" => 'failed',
"message1" => "Email could not be sent"
);
*/

echo 0;

}


//php mailer email ends here



//echo json_encode($output);








?>

