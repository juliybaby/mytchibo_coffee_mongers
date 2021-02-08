<?php
//error_reporting(0);


include('data6rst.php');

$id=strip_tags($_POST['id']);
$reciever_id=strip_tags($_POST['rid']);
$requestId = strip_tags($_POST['requestId']);
$sender_sid =  strip_tags($_POST['sender_sid']);

$timer =time();

session_start();

$uid = strip_tags($_SESSION['uid']);
$userid = $uid;
$fullname = strip_tags($_SESSION['fullname']);
$username =  strip_tags($_SESSION['username']);
$userphoto = strip_tags($_SESSION['photo']);
$user_rank = strip_tags($_SESSION['user_rank']);


$statement = $db->prepare('INSERT INTO friends
(sender_name,sender_id,sender_photo,reciever_id,status1,status2,status3,timing)
 
                          values
(:sender_name,:sender_id,:sender_photo,:reciever_id,:status1,:status2,:status3,:timing)');

$statement->execute(array( 
':sender_name' => $fullname,
':sender_id' => $userid,
':sender_photo' => $userphoto,
':reciever_id' => $sender_sid,
':status1' => '1',
':status2' => '1',
':status3' => '0',
':timing' => $timer

));





// insert into notification

$statement2 = $db->prepare('INSERT INTO notification
(post_id,userid,fullname,photo,user_rank,reciever_id,status,type,timing,title,title_seo)
                        values
(:post_id,:userid,:fullname,:photo,:user_rank,:reciever_id,:status,:type,:timing,:title,:title_seo)');
$statement2->execute(array( 

':post_id' => '0',
':userid' => $userid,
':fullname' => $fullname,
':photo' => $userphoto,
':user_rank' => 'Member',
':reciever_id' => $sender_sid,
':status' => 'unread',
':type' => 'friend_accept',
':timing' => $timer,
':title' => 'Your Friend Request has been accepted',
':title_seo' => '$title_seo'
));







// update friends table
$update = $db->prepare("UPDATE friends SET status2 ='1' where id = :id");

		$update->execute(array(
			':id' => $requestId
    ));



$del = $db->prepare('DELETE FROM notification where id = :id');

		$del->execute(array(
			':id' => $id
    ));


if($del){

echo 1;
}else{

echo 0;
}









?>


