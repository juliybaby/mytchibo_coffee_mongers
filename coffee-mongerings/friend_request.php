<?php
error_reporting(0);
session_start();

$uid = strip_tags($_SESSION['uid']);
$userid = $uid;
$fullname = strip_tags($_SESSION['fullname']);
$username =  strip_tags($_SESSION['username']);
$userphoto = strip_tags($_SESSION['photo']);
$user_rank = strip_tags($_SESSION['user_rank']);

$recipient_sid = strip_tags($_POST['recipient_sid']);


// do not send request to yourself
if ($recipient_sid == $userid){
echo 2;
exit();
}





$token= md5(uniqid());
$timer = time();
include("time/now.fn");
$created_time=strip_tags($now);
$dt2=date("Y-m-d H:i:s");
$pa = 0;



include('data6rst.php');
// check if member has already send a friend request

$st = $db->prepare("SELECT * FROM friends where reciever_id =:reciever_id and sender_id=:sender_id");
$st->execute(array(':reciever_id' => $recipient_sid, ':sender_id' => $userid));
$count = $st->rowCount();
$row= $st->fetch();
$stat = $row['status1'];

//if($stat == 1){


if($count == 1){
echo 3;
exit();
}



$st1 = $db->prepare("SELECT * FROM friends where reciever_id =:reciever_id and sender_id=:sender_id");
$st1->execute(array(':reciever_id' => $userid, ':sender_id' => $recipient_sid));
$count1 = $st1->rowCount();


if($count1 == 1){
echo 4;
exit();
}


$statement = $db->prepare('INSERT INTO friends
(sender_name,sender_id,sender_photo,reciever_id,status1,status2,status3,timing)
 
                          values
(:sender_name,:sender_id,:sender_photo,:reciever_id,:status1,:status2,:status3,:timing)');

$statement->execute(array( 
':sender_name' => $fullname,
':sender_id' => $userid,
':sender_photo' => $userphoto,
':reciever_id' => $recipient_sid,
':status1' => '1',
':status2' => '0',
':status3' => '0',
':timing' => $timer

));





$res = $db->query("SELECT LAST_INSERT_ID()");
$last_insertedID = $res->fetchColumn();



               


// insert into notification post table

$statement2 = $db->prepare('INSERT INTO notification
(post_id,userid,fullname,photo,user_rank,reciever_id,status,type,timing,title,title_seo)
                        values
(:post_id,:userid,:fullname,:photo,:user_rank,:reciever_id,:status,:type,:timing,:title,:title_seo)');
$statement2->execute(array( 

':post_id' => $last_insertedID,
':userid' => $userid,
':fullname' => $fullname,
':photo' => $userphoto,
':user_rank' => 'Member',
':reciever_id' => $recipient_sid,
':status' => 'unread',
':type' => 'friend_request',
':timing' => $timer,
':title' => 'You have a Friend Request',
':title_seo' => '$title_seo'
));



if($statement2){

echo 1;
}
else{
echo 0;
}


