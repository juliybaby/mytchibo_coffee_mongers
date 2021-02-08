<?php 
ob_start();
error_reporting(0);


 ?>
<script>
$(document).ready(function(){

$('.notify_delete_post_btn').click(function(){
// confirm start
 if(confirm("Are you sure you want to Delete This Posts Alerts: ")){
var id = $(this).data('id');
var rid = $(this).data('rid');

//var userid_sess_data = localStorage.getItem('useridsessdata');

$(".loader-notify-delete-post_"+id).fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i>&nbsp;Please Wait, Posts Alerts is being deleted...</div>');
var datasend = {'id': id, 'rid': rid};
		$.ajax({
			
			type:'POST',
			url:'notify_delete_post.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){


	if(msg == 1){
alert('Posts Alerts Successfully Deleted');
$(".loader-notify-delete-post_"+id).hide();
$(".result-notify-delete-post_"+id).html("<div style='color:white;background:green;padding:10px;'>Posts Alerts Successfully Deleted</div>");
setTimeout(function(){ $(".result-notify-delete-post_"+id).html(''); }, 5000);
location.reload();
}


	if(msg == 0){

alert('Posts Alerts could not be deleted. Please ensure you are connected to Internet.');
$(".loader-notify-delete-post_"+id).hide();
$(".result-notify-delete-post_"+id).html("<div style='color:white;background:red;padding:10px;'>Posts Alerts could not be deleted. Please ensure you are connected to Internet.</div>");
setTimeout(function(){ $(".result-notify-delete-post_"+id).html(''); }, 5000);

}

}
			
});
}

// confirm ends

                });










            });






// accept request starts here
$(document).ready(function(){

$('.notify_accept_btn').click(function(){
// confirm start
 if(confirm("Are you sure you want to Accept this Request: ")){
var id = $(this).data('id1');
var rid = $(this).data('rid1');
var requestId = $(this).data('reqid');
var sender_sid = $(this).data('rsid');

//alert(requestId);


$(".loader-accept_"+id).fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i>&nbsp;Please Wait, Friends Request is being Accepted...</div>');
var datasend = {'id': id, 'rid': rid, requestId:requestId, sender_sid:sender_sid};
		$.ajax({
			
			type:'POST',
			url:'notify_accept_request.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){


	if(msg == 1){
alert('Friends Request Successfully Accepted');
$(".loader-accept_"+id).hide();
$(".result-accept_"+id).html("<div style='color:white;background:green;padding:10px;'>Friends Request Successfully Accepted</div>");
setTimeout(function(){ $(".result-accept_"+id).html(''); }, 5000);
location.reload();
}


	if(msg == 0){

alert('Friends Request could not be deleted. Please ensure you are connected to Internet.');
$(".loader-accept_"+id).hide();
$(".result-accept_"+id).html("<div style='color:white;background:red;padding:10px;'>Friends Request could not be deleted. Please ensure you are connected to Internet.</div>");
setTimeout(function(){ $(".result-accept_"+id).html(''); }, 5000);

}

}
			
});
}

// confirm ends

                });










            });


// accepts request ends here



</script>





<style>



.post-css2{
background:#ec5574;
border:none;
color:white;
padding:6px;
border-radius:20%;
}

.post-css2:hover{
background:orange;
color:black;
}




.post-css1{
background:red;
border:none;
color:white;
padding:6px;
}

.post-css1:hover{
background:orange;
color:black;
}


.post-css{
background:navy;
border:none;
color:white;
padding:6px;
text-align:center;
}

.post-css:hover{
background:orange;
color:black;
}

.notify_content_css{
display:inline-block;border-style: dashed; border-width:2px; border-color: 
orange;color:black;background:#eeeeee;padding:10px;
}


.notify_content_css:hover{
color:black;background:#ec5574;
}
</style>




<?php

$sender_id=strip_tags($_POST['sender_id']);
$userid_sess_data = $sender_id;


require('data6rst.php');

$result = $db->prepare('SELECT * FROM notification where reciever_id = :reciever_id order by id desc');

		$result->execute(array(
			':reciever_id' => $userid_sess_data
    ));
$nosofrows = $result->rowCount();
//echo $nosofrows;

$rec_List1 = $nosofrows;


if($rec_List1  == 0){

echo "<div style='background:red;color:white;padding:10px;border:none'>No New Contents or Comments Alerts Yet.</div>";
}


while($v1 = $result->fetch()){
//foreach($row['data'] as $v1){


$id = $v1['id'];
$post_id = $v1['post_id'];
$sender_userid = $v1['userid'];
$sender_fullname1 = $v1['fullname'];
$sender_photo = $v1['photo'];
$department =  $v1['user_rank'];
$rid = $v1['reciever_id'];
$status = $v1['status'];
$type  = $v1['type'];
$timing = $v1['timing'];
$title = $v1['title'];
//$microtitle = substr($title, 0, 80)."...";

$microtitle = $title;
$title1 = $v1['title_seo'];


// replace empty space with hyphen
$sender_fullname = str_replace(' ', '-', $sender_fullname1);

$patient_id = $v1['patient_id'];
$doctor_id = $v1['doctor_id'];
$doctor_email = $v1['doctor_email'];
$description = $title;


?>





<div class="col-sm-12 notify_content_css" >



<?php 
if($type == 'post'){
?>


<div  style="color:black;padding:10px;background:#ddd">

<img style='max-height:60px;max-width:60px;' class='img-circle' src='uploads/<?php echo $sender_photo; ?>' alt='User Image'>


<span style='font-size:20px;color:navy;' class="fa fa-edit"></span><b style='color:navy'>Post <?php echo $status;?></b>

<br><b><?php echo $sender_fullname1; ?>(<?php echo $department;?>)</b> Just Shared a Post Status Updates<br>
<b>Title:</b> <?php echo $microtitle; ?><br>
<span style='color:#800000;'><b> Time: </b> <span data-livestamp="<?php echo $timing;?>"></span></span> 

<?php 
if($status == 'unread'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>


<?php 
if($status == 'read'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span><span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>

<br>

<p>
 
<a href='reply1.php?title=<?php echo $title1; ?>&notifyId=<?php echo $id; ?>' class='pull-left col-sm-5 post-css' title='View Posts'>View Posts</a>
<button class='pull-right col-sm-6 post-css1 notify_delete_post_btn' data-id='<?php echo $id; ?>' data-rid='<?php echo $rid; ?>' title='Delete Alerts'>Delete Alerts</button>
   <div class="loader-notify-delete-post_<?php echo $id; ?>"></div>
   <div class="result-notify-delete-post_<?php echo $id; ?>"></div>
</p>
<br>
</div>
<?php
}
?>








<?php 
if($type == 'video'){
?>


<div  style="color:black;padding:10px;background:#ddd">

<img style='max-height:60px;max-width:60px;' class='img-circle' src='uploads/<?php echo $sender_photo; ?>' alt='User Image'>


<span style='font-size:20px;color:navy;' class="fa fa-edit"></span><b style='color:navy'>Post <?php echo $status;?></b>

<br><b><?php echo $sender_fullname1; ?>(<?php echo $department;?>)</b> Just Shared a Video Status Updates<br>
<b>Title:</b> <?php echo $microtitle; ?><br>
<span style='color:#800000;'><b> Time: </b> <span data-livestamp="<?php echo $timing;?>"></span></span> 

<?php 
if($status == 'unread'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>


<?php 
if($status == 'read'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span><span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>

<br>

<p>
 
<a href='reply1.php?title=<?php echo $title1; ?>&notifyId=<?php echo $id; ?>' class='pull-left col-sm-5 post-css' title='View Posts'>View Videos</a>
<button class='pull-right col-sm-6 post-css1 notify_delete_post_btn' data-id='<?php echo $id; ?>' data-rid='<?php echo $rid; ?>' title='Delete Alerts'>Delete Alerts</button>
   <div class="loader-notify-delete-post_<?php echo $id; ?>"></div>
   <div class="result-notify-delete-post_<?php echo $id; ?>"></div>
</p>
<br>
</div>
<?php
}
?>








<?php 
if($type == 'protest'){
?>


<div  style="color:black;padding:10px;background:#ddd">

<img style='max-height:60px;max-width:60px;' class='img-circle' src='uploads/<?php echo $sender_photo; ?>' alt='User Image'>


<span style='font-size:20px;color:navy;' class="fa fa-edit"></span><b style='color:navy'>Post <?php echo $status;?></b>

<br><b><?php echo $sender_fullname1; ?>(<?php echo $department;?>)</b> Just Shared a Protests<br>
<b>Title:</b> <?php echo $microtitle; ?><br>
<span style='color:#800000;'><b> Time: </b> <span data-livestamp="<?php echo $timing;?>"></span></span> 

<?php 
if($status == 'unread'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>


<?php 
if($status == 'read'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span><span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>

<br>

<p>
 
<a href='reply1.php?title=<?php echo $title1; ?>&notifyId=<?php echo $id; ?>' class='pull-left col-sm-5 post-css' title='View Posts'>View Protests</a>
<button class='pull-right col-sm-6 post-css1 notify_delete_post_btn' data-id='<?php echo $id; ?>' data-rid='<?php echo $rid; ?>' title='Delete Alerts'>Delete Alerts</button>
   <div class="loader-notify-delete-post_<?php echo $id; ?>"></div>
   <div class="result-notify-delete-post_<?php echo $id; ?>"></div>
</p>
<br>
</div>
<?php
}
?>







<?php 
if($type == 'comment'){
?>


<div  style="color:black;padding:10px;background:#ddd">

<img style='max-height:60px;max-width:60px;' class='img-circle' src='uploads/<?php echo $sender_photo; ?>' alt='User Image'>


<span style='font-size:20px;color:navy;' class="fa fa-comments-o"></span><b style='color:navy'>Comment <?php echo $status;?></b>

<br><b><?php echo $sender_fullname1; ?>(<?php echo $department; ?>)</b> Commented on your Medical<br>
<b>Title:</b> <?php echo $microtitle; ?><br>
<span style='color:#800000;'><b> Time: </b> <span data-livestamp="<?php echo $timing;?>"></span></span> 

<?php 
if($status == 'unread'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>


<?php 
if($status == 'read'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span><span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>

<br>

<p>
<a href='reply1.php?title=<?php echo $title1; ?>&notifyId=<?php echo $id; ?>' class='pull-left col-sm-5 post-css' title='View Posts'>View Comments</a>
<button class='pull-right col-sm-6 post-css1 notify_delete_post_btn' data-id='<?php echo $id; ?>' data-rid='<?php echo $rid; ?>' title='Delete Alerts'>Delete Alerts</button>
   <div class="loader-notify-delete-post_<?php echo $id; ?>"></div>
   <div class="result-notify-delete-post_<?php echo $id; ?>"></div>
</p>
<br>
</div>
<?php
}
?>





<?php 
if($type == 'friend_request'){
?>


<div  style="color:black;padding:10px;background:#ddd">

<button class='readmore_btn'><a title='Click to access users Profile page' style='color:white;' href='profile.php?id=<?php echo $sender_userid; ?>'><span style='font-size:20px;color:white;' class='fa fa-user'></span> View Users Profile</a></button><br>


<img style='max-height:60px;max-width:60px;' class='img-circle' src='uploads/<?php echo $sender_photo; ?>' alt='User Image'>


<span style='font-size:20px;color:navy;' class="fa fa-user"></span><b style='color:navy'>Friend Request <?php echo $status;?></b>

<br><b><?php echo $sender_fullname1; ?>(<?php echo $department; ?>)</b> Sent You a Friend Request<br>
<b>Title:</b> <?php echo $microtitle; ?><br>
<span style='color:#800000;'><b> Time: </b> <span data-livestamp="<?php echo $timing;?>"></span></span> 

<?php 
if($status == 'unread'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>


<?php 
if($status == 'read'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span><span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>

<br>

<p>


<button class='pull-left col-sm-5 post-css notify_accept_btn' data-id1='<?php echo $id; ?>' data-rid1='<?php echo $rid; ?>' data-reqid='<?php echo $post_id; ?>' data-rsid='<?php echo $sender_userid; ?>'  title='Accept Request'>Accept Request</button>
   <div class="loader-accept_<?php echo $id; ?>"></div>
   <div class="result-accept_<?php echo $id; ?>"></div>



<button class='pull-right col-sm-6 post-css1 notify_delete_post_btn' data-id='<?php echo $id; ?>' data-rid='<?php echo $rid; ?>' title='Delete Alerts'>Delete Request/Alerts</button>
   <div class="loader-notify-delete-post_<?php echo $id; ?>"></div>
   <div class="result-notify-delete-post_<?php echo $id; ?>"></div>
</p>
<br>
</div>
<?php
}
?>










<?php 
if($type == 'friend_accept'){
?>


<div  style="color:black;padding:10px;background:#ddd">

<button class='readmore_btn'><a title='Click to access users Profile page' style='color:white;' href='profile.php?id=<?php echo $sender_userid; ?>'><span style='font-size:20px;color:white;' class='fa fa-user'></span> View Users Profile</a></button><br>


<img style='max-height:60px;max-width:60px;' class='img-circle' src='uploads/<?php echo $sender_photo; ?>' alt='User Image'>


<span style='font-size:20px;color:navy;' class="fa fa-user"></span><b style='color:navy'>Friends Connection Successful <?php echo $status;?></b>

<br><b><?php echo $sender_fullname1; ?>(<?php echo $department; ?>)</b> Accepted Your Friends Request says Thanks<br>
<b>Title:</b> <?php echo $microtitle; ?><br>
<span style='color:#800000;'><b> Time: </b> <span data-livestamp="<?php echo $timing;?>"></span></span> 

<?php 
if($status == 'unread'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>


<?php 
if($status == 'read'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span><span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>

<br>

<p>



<button class='pull-right col-sm-6 post-css1 notify_delete_post_btn' data-id='<?php echo $id; ?>' data-rid='<?php echo $rid; ?>' title='Delete Alerts'>Delete Request/Alerts</button>
   <div class="loader-notify-delete-post_<?php echo $id; ?>"></div>
   <div class="result-notify-delete-post_<?php echo $id; ?>"></div>
</p>
<br>
</div>
<?php
}
?>








</div>



<?php
}
?>

<?php
ob_flush();
?>


