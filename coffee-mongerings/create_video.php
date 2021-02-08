﻿
<?php
session_start();
include ('authenticate.php');


$userid_sess =  htmlentities(htmlentities($_SESSION['uid'], ENT_QUOTES, "UTF-8"));
$fullname_sess =  htmlentities(htmlentities($_SESSION['fullname'], ENT_QUOTES, "UTF-8"));
$username_sess =   htmlentities(htmlentities($_SESSION['username'], ENT_QUOTES, "UTF-8"));
$photo_sess =  htmlentities(htmlentities($_SESSION['photo'], ENT_QUOTES, "UTF-8"));
$email_sess =  htmlentities(htmlentities($_SESSION['email'], ENT_QUOTES, "UTF-8"));

$user_rank = strip_tags($_SESSION['user_rank']);
?>


<!DOCTYPE html>
<html lang="en">

<head>
 <title><?php include('header_title.php'); echo $header_tit; ?> - Welcome <?php echo htmlentities(htmlentities($_SESSION['fullname'], ENT_QUOTES, "UTF-8")); ?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="landing page, website design" />

  <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
<script src="moment.js"></script>
	<script src="livestamp.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">







<style>
.imagelogo_li_remove {
list-style-type: none;
margin: 0;
 padding: 0;
}

.imagelogo_data{
 width:120px;
 height:80px;
}
  .navbar {
    letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
   background-color:#800000;

    z-index: 9999;
    border: 0;
    font-family: comic sans ms;
//color:white;
  }


.navbar-toggle {
background-color:orange;
  }

.navgate {
padding:16px;color:white;

}

.navgate:hover{
 color: black;
 background-color: orange;

}


.navbar-header{
height:60px;
}

.navbar-header-collapse-color {
background:white;
}

.dropdown_bgcolor{

background: #800000;
color:white;
}

.dropdown_dashedline{
 border-bottom: 2px dotted white;
}

.navgate101:hover{
background:purple;
color:white;

}



.invite_btn{
background-color: purple;
padding: 6px;
color:white;
font-size:14px;
//border-radius: 50%;
border: none;
cursor: pointer;
text-align: center;
}
.invite_btn:hover {
background: black;
color:white;
}


.course_btn{
background-color: red;
padding: 6px;
color:white;
font-size:14px;
//border-radius: 50%;
border: none;
cursor: pointer;
text-align: center;
}
.course_btn:hover {
background: black;
color:white;
}


.creator_imagelogo_data{
 width:60px;
 height:60px;
}

/* make modal appear at center of the page */
.modal-appear-center {
margin-top: 25%;
//width:40%;
}


/* make modal appear at center of the page */
.modal-appear-center1 {
margin-top: 15%;
//width:40%;
}


.modal_head_color{
background-color: #800000;
padding: 6px;
color:white;
}


.modal_footer_color{
background-color: #800000;
padding: 6px;
color:white;
}


/* footer */


  .navbar_footer {
letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
    //background-color:#800000;
    color:white;
    padding:20px;
    border: 0;
    font-family: comic sans ms;
  }


.footer_bgcolor{
background: black;
}

.footer_text1{
color:white;
font-size:20px;
border:none;
cursor:pointer;
}

.footer_text2{
color:grey;
font-size:14px;
border:none;
cursor:pointer;
}

.footer_text1:hover{
color:grey;
}


.footer_text2:hover{
color:orange;
}


.footer_dashedline{
 border-top: 1px dashed white;
}








.e_search_form{
width: 38vw;
height:60px;
padding:10px;
cursor:pointer;
border:none;
border-radius:15%;
color:black;
font-size:16px;
background:white;

//transform: skew(-22deg);
margin-left:-90px;

}

.e_search_form:hover{

border-style: solid; border-width:4px; border-color: #824c4e;
background: #dddddd;
color: black;
}



@media screen and (max-width: 768px) {
  .e_search_form{

  width: 100%;
  padding: 20px;
margin-left:0px;
  }
}



@media screen and (max-width: 600px) {
  .e_search_form{
  width: 100%;
  padding: 20px 
margin-left:0px; 
  }
}





.readmore_btn{
background-color: #800000;
padding: 6px;
color:white;
font-size:14px;
border-radius: 10%;
border: none;
cursor: pointer;
text-align: center;
//width:100%;
z-index: -999;
}
.readmore_btn:hover {
background: black;
color:white;
}	


.category_post{
background-color: #800000;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
width:100%;
z-index: -999;
}
.category_post:hover {
background: black;
color:white;
}	



</style>





    </head>
    <body>

 
</head>
<body>




<?php

$token = '1';
$usern  = '1';

?>


<script>

// stopt all bootstrap drop down menu from closing on click inside
$(document).on('click', '.dropdown-menu', function (e) {
  e.stopPropagation();
});


</script>



<!--start left column all-->

    <div class="left-column-all left_shifting">

<!-- start column nav-->


<div class="text-center">
<nav class="navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navgator">
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span> 
        <span class="navbar-header-collapse-color icon-bar"></span>                       
      </button>
     
<li class="navbar-brand home_click imagelogo_li_remove" ><img class="img-rounded imagelogo_data" src="logo1.png"></li>
    </div>
    <div class="collapse navbar-collapse" id="navgator">


      <ul class="nav navbar-nav navbar-right">




<!--start post comments notification-->

<style>

.notify_count { color: #FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: green; padding: 2px 6px;font-size:14px; }
.notify_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:14px; }

</style>




<script>

$(document).ready(function(){

var userid_sess_data = '<?php echo $userid_sess; ?>';
$("#loader-notify_alert_posts").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i></div>');
var datasend = {userid_sess_data:userid_sess_data};

//alert(userid_sess_data);
	
		$.ajax({
			
			type:'POST',
			url:'notify_alert.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

//alert(msg);

$("#loader-notify_alert_posts").hide();
$("#result-notify_alert_posts").html(msg);
//setTimeout(function(){ $('#result-notify_alert_posts').html(''); }, 5000);	


			
	
}
			
		});
		
		

});


</script>


<li>
<span style='color:white;' class="dropdown fa fa-bell">
  <a style="color:white;font-size:14px;cursor:pointer;" title='Posts, Comments and Like Alerts' class="btn1 btn-default1 dropdown-toggle"  data-toggle="dropdown">
  <span class="notify_count"><span id="loader-notify_alert_posts"></span><span id="result-notify_alert_posts"></span></span>
</a>

<ul class="dropdown-menu" style='width:350px;height: 400px;overflow-y : scroll;'>
<h4 style='color:blue;'>Posts Shares and Comments Alerts</h4>
<button class="btn btn-primary" id="refresh_notify" title="Refresh Notification">Refresh Notification</button>
<br>


<script>

$(document).ready(function(){


var userid_sess_data = '<?php echo $userid_sess; ?>';
var username_sess_data = '<?php echo $userid_sess; ?>';

var sender_id=userid_sess_data;
var sender_username=username_sess_data;


if(sender_id ==''){
alert('something is wrong with Senders Id');
}


else{


$("#loader-load-notify-post").fadeIn(400).html('<br><div style="color:white;background:#ec5574;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i>&nbsp;Please Wait,Loading Your Notification Alerts...</div>');
var datasend = {sender_id:sender_id, sender_username:sender_username};


	
		$.ajax({
			
			type:'POST',
			url:'notification_load.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-load-notify-post").hide();
$("#result-load-notify-post").html(msg);
//setTimeout(function(){ $('#result-load-notify-post(''); }, 5000);				

//location.reload();	
}
			
		});
		
		}


});










$(document).ready(function(){

  $('#refresh_notify').click(function () {
var userid_sess_data = '<?php echo $userid_sess; ?>';
var username_sess_data = '<?php echo $userid_sess; ?>';

var sender_id=userid_sess_data;
var sender_username=username_sess_data;


if(sender_id ==''){
alert('something is wrong with Senders Id');
}


else{


$("#loader-load-notify-post").fadeIn(400).html('<br><div style="color:white;background:#ec5574;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i>&nbsp;Please Wait,Loading Your Notification Alerts...</div>');
var datasend = {sender_id:sender_id, sender_username:sender_username};


	
		$.ajax({
			
			type:'POST',
			url:'notification_load.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-load-notify-post").hide();
$("#result-load-notify-post").html(msg);
//setTimeout(function(){ $('#result-load-notify-post(''); }, 5000);				

//location.reload();	
}
			
		});
		
		}





// start notify 1


var userid_sess_data = '<?php echo $userid_sess; ?>';
$("#loader-notify_alert_posts").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i></div>');
var datasend = {userid_sess_data:userid_sess_data};

//alert(userid_sess_data);
	
		$.ajax({
			
			type:'POST',
			url:'notify_alert.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

//alert(msg);

$("#loader-notify_alert_posts").hide();
$("#result-notify_alert_posts").html(msg);
//setTimeout(function(){ $('#result-notify_alert_posts').html(''); }, 5000);	


			
	
}
			
		});
		


// end notify 1


});


});


</script>



<!-- form START-->
<div id="loader-load-notify-post"></div>
<div id="result-load-notify-post"></div>


<!--form ENDS-->

<p></p>

</ul></span>
&nbsp;&nbsp;
</li>


<!--end post comments notifications-->


             <li class="navgate"><a title='View Dashboard' href="dashboard.php" style="border-style: solid; border-width:4px; border-color:orange;color:white;font-size:14px;">Dashboard</a></li>


<li class="navgate"><img style="max-height:60px;max-width:60px;" class="img-circle" width="60px" height="60px" src="uploads/<?php echo htmlentities(htmlentities($_SESSION['photo'], ENT_QUOTES, "UTF-8")); ?>" width="80px" height="80px">


<span class="dropdown">
  <a style="color:white;font-size:14px;cursor:pointer;" title='View More Data' class="btn1 btn-default1 dropdown-toggle"  data-toggle="dropdown"><?php echo htmlentities(htmlentities($_SESSION['fullname'], ENT_QUOTES, "UTF-8")); ?>
  <span class="caret"></span></a>

<ul class="dropdown-menu col-sm-12">
<li><a title='My Profile' href="profile_base.php">My Profile/Posts</a></li>
<li><a title='Logout' href="logout.php">Logout</a></li>

</ul></span>

</li>



      </ul>




    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column nav-->








<div class='row'>
<br><br><br>

<!--Start Left-->
<div class='col-sm-0'>
//



</div>

<!--End Left-->










<!--Start Right-->
<div class='col-sm-12'>






<!-- Main Post start -->




<div style="font-size:30px;color:#800000;" >
<center>Add Youtube Video</center></div><br>





<!--create course form START here-->


<div style="border-style: dashed; border-width:2px; border-color: orange;background:#eeeeee;padding:10px;" class="row">




        



<!--start form-->

<script>

$(document).ready(function(){
$('#post_btn').click(function(){
		
var title = $('#title').val();
var offering = $(".offering:checked").val();
var messaging = $("#messaging").val();
var help_category = $("#help_category").val();
var video_url = $("#video_url").val();


var content = $('#msg_result').html();

if(!offering){
alert('Please Select Either Seeking for Help or Offering for help ok.');
//return false;
}



else if(help_category==""){
alert('Help Request Category cannot be Empty');
//return false;
}


else if(title==""){
alert('Post Title cannot be Empty');
//return false;
}

else if(video_url==""){
alert('Youtube Video URL cannot be Empty');
//return false;
}


else if(messaging==""){
alert('Post Description cannot be Empty');
//return false;
}



else{

$('#loader_l2').fadeIn(400).html('<br><div style="color:white;background:#3b5998;padding:10px;"><img src="ajax-loader.gif">&nbsp;Please Wait, Posts is being sent...</div>');
//var datasend = "geo_address="+ geo_address+'&title='+title+'&offering='+offering+'&messaging='+messaging+'&help_category='+help_category;
var datasend = {title:title, offering:offering, messaging:messaging, help_category:help_category,video_url:video_url};	
		$.ajax({
			
			type:'POST',
			url:'posts_video.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){



if(msg == 1){
alert('Video Post Successfully Sent..');			
$('#loader_l2').hide();
$('#result_l2').html("<div style='color:white;background:green;padding:10px;'>Video Posts Successfully Sent</div>");
setTimeout(function(){ $('#result_l2').html(''); }, 5000);



window.location='dashboard.php';				
			
}


else if(msg == 22){
alert('Please Enter a Valid Youtube Video URL.');
$('#loader_l2').hide();
$('#result_l2').html("<div style='color:white;background:red;padding:10px;'>Please Enter a Valid Youtube Video URL</div>");
}



else if(msg == 33){
alert('Video URL must be Youtube.');
$('#loader_l2').hide();
$('#result_l2').html("<div style='color:white;background:red;padding:10px;'>Video URL Must be Youtube</div>");
}





else{

alert('Post submission Failed.');			
$('#loader_l2').hide();
$('#result_l2').html("<div style='color:white;background:red;padding:10px;'>Post submission Failed</div>");
setTimeout(function(){ $('#result_l2').html(''); }, 5000);				
	

}




			
			}
			
		});
		
		}
		
	})
					
});







</script>




<div class="col-sm-12 form-group">
<input type="radio" class="offering" name="offering" value="Seeking Help" /> Seeking Help  <br><br>
<input type="radio" class="offering" name="offering" value="Offering Help" /> Offering Help
</div>
<br>
<div class="col-sm-12 form-group">
<label>Request Category Type</label>
<select class="form-control col-sm-12" id="help_category" name="help_category" required>
<option value="">-- Select Request Category Type --</option>


<option value="Child-Care">Child-Care</option>
<option value="Elderly-Care">Elderly-Care</option>
<option value="Students">Students</option>
<option value="The-Sick">The-Sick</option>
<option value="Pregnant-Women">Pregnant-Women</option>
<option value="Boys">Boys</option>
<option value="Girls">Girls</option>
<option value="Athelets">Athelets</option>
<option value="Lactating-Mother">Lactating-Mother</option>

<option value="Tchibo-Coffee-Education">Tchibo-Coffee-Education</option>
<option value="Tchibo-Coffee-Machine-Operation">Tchibo-Coffee-Machine-Operation</option>

<option value="Others">Others</option>
</select>
</div>



<div class="col-sm-12 form-group">
<label>Video Post Title</label>
<input  class="form-control contact_input_color" id="title" name="title" placeholder="Post Title" type="text" required>
</div>



<div class="col-sm-12 form-group">
<label>Youtube Video URL Eg: https://www.youtube.com/watch?v=CgMLS0UJCz4</label>
<input  class="form-control contact_input_color" id="video_url" name="video_url" placeholder="Enter Youtube Video URL" type="text" required>
</div>



<div class="col-sm-12 form-group">
<label>Video Post Description</label><br>
<textarea  class=" form-control contact_input_color" id="messaging" name="messaging" placeholder="Post Description"  required></textarea>
</div>



<br>
<div class=" form-group">
<div style='padding:10px;color:black;background:white;' id='msg_result' class='msg_result'></div>
</div>
<br>
<br>





<div class="col-sm-12 form-group">
                        <div id="loader_l2"></div>
                        <div id="result_l2"></div>
</div>


<button type="button" id="post_btn" class="category_post"  />Publish Video</button>
</div>







<!--end form-->



</div>





<!--create course form ENDS-->





<!-- Main Post ends -->

</div>








<!-- Main Post Database query starts here -->








<br>
<style>

.map_css{
background:#ec5574;
color:black;
border:none;
padding:10px;
border-radius:10%;
}


.map_css:hover{
background:orange;
color:black;


}



.map1_css{
background:purple;
color:black;
border:none;
padding:10px;
border-radius:10%;
}


.map1_css:hover{
background:orange;
color:black;


}


.point_count { color: #fff; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: #ec5574; padding: 2px 6px;font-size:20px; }
.point_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:20px; }


</style>


        <div class="content">

            <?php

include('data6rst.php');

$result = $db->prepare("SELECT * FROM posts where post_type='video' order by id desc");
$result->execute(array());

$count_post = $result->rowCount();
if($count_post ==0){
echo "<div style='background:red;color:white;padding:10px;border:none;'>No Educative Video Posted Yet by a Member.. <b></b></div>";
}


while ($row = $result->fetch()) {

$id = htmlentities(htmlentities($row['id'], ENT_QUOTES, "UTF-8"));
$postid = $id;
$title = htmlentities(htmlentities($row['title'], ENT_QUOTES, "UTF-8"));
$title_seo = htmlentities(htmlentities($row['title_seo'], ENT_QUOTES, "UTF-8"));
$content = $row['content'];
$username = htmlentities(htmlentities($row['username'], ENT_QUOTES, "UTF-8"));
$fullname = htmlentities(htmlentities($row['fullname'], ENT_QUOTES, "UTF-8"));
$userphoto = htmlentities(htmlentities($row['userphoto'], ENT_QUOTES, "UTF-8"));
$created_time = htmlentities(htmlentities($row['timer2'], ENT_QUOTES, "UTF-8"));
$timer1 = htmlentities(htmlentities($row['timer1'], ENT_QUOTES, "UTF-8"));
$post_userid = htmlentities(htmlentities($row['userid'], ENT_QUOTES, "UTF-8"));

$microcontent = substr($content, 0, 120)."...";
$offering = htmlentities(htmlentities($row['offering'], ENT_QUOTES, "UTF-8"));
$help_category = htmlentities(htmlentities($row['help_category'], ENT_QUOTES, "UTF-8"));
$points = htmlentities(htmlentities($row['points'], ENT_QUOTES, "UTF-8"));
$total_comment = htmlentities(htmlentities($row['total_comments'], ENT_QUOTES, "UTF-8"));

$post_type = htmlentities(htmlentities($row['post_type'], ENT_QUOTES, "UTF-8"));

$video_id = htmlentities(htmlentities($row['video_id'], ENT_QUOTES, "UTF-8"));



            ?>

<?php
if($post_type =='posts'){
?>
                    <div class="post well">



<span class='point_count'><span>Awards: </span> <?php echo $points; ?> Points</span>
<button class='readmore_btn'><a title='Click to access users Profile page' style='color:white;' href='profile.php?id=<?php echo $post_userid; ?>'><span style='font-size:20px;color:white;' class='fa fa-user'></span> View Users Profile & Connect</a></button><br>


<h3>Category: <?php echo $offering; ?>   on <?php echo $help_category; ?>  </h3><br>



<img class='' style='border-style: solid; border-width:3px; border-color:#800000; width:80px;height:80px; 
max-width:80px;max-height:80px;border-radius: 50%;' src='uploads/<?php echo $userphoto; ?>'><br>
<b style='color:#800000;font-size:18px;' >Name: <?php echo $fullname; ?> </b><br>


<b class='title_css'>Title: <?php echo $title; ?></b><br>
<b >Descriptions:</b><br><?php echo $content; ?> <br>
      
<span style='color:#800000;'><b> Time: </b> <span data-livestamp="<?php echo $timer1;?>"></span></span> <br>


<span style="font-size:26px;color:#800000;" class="fa fa-comments"></span> 
&nbsp;<span id="<?php echo $postid; ?>"  style="color:#800000;cursor:pointer;" title="Comments" />Comments</span>
(<span><?php echo $total_comment; ?></span>)


<br>

<button class='readmore_btn_no seeking_css1 btn btn-warning'><a title='Click to Read More' style='color:white;' 
href='reply.php?title=<?php echo $title_seo; ?>'>Read More & Reply/Comments</a></button>




                 
</div>

  <?php

                }
            ?>










<?php
if($post_type =='video'){
?>
                    <div class="post well">



<span class='point_count'><span>Awards: </span> <?php echo $points; ?> Points</span>
<button class='readmore_btn'><a title='Click to access users Profile page' style='color:white;' href='profile.php?id=<?php echo $post_userid; ?>'><span style='font-size:20px;color:white;' class='fa fa-user'></span> View Users Profile & Connect</a></button><br>

<h3>Category: <?php echo $offering; ?>   on <?php echo $help_category; ?>  </h3><br>



<img class='' style='border-style: solid; border-width:3px; border-color:#800000; width:80px;height:80px; 
max-width:80px;max-height:80px;border-radius: 50%;' src='uploads/<?php echo $userphoto; ?>'><br>
<b style='color:#800000;font-size:18px;' >Name: <?php echo $fullname; ?> </b><br>


<b class='title_css'>Title: <?php echo $title; ?></b><br>
<b >Descriptions:</b><br><?php echo $content; ?> <br><br>

<iframe class='responsive_video' width='600' height='500' src='https://www.youtube.com/embed/<?php echo $video_id; ?>'>
</iframe><br><br>


      
<span style='color:#800000;'><b> Time: </b> <span data-livestamp="<?php echo $timer1;?>"></span></span> <br>


<span style="font-size:26px;color:#800000;" class="fa fa-comments"></span> 
&nbsp;<span id="<?php echo $postid; ?>"  style="color:#800000;cursor:pointer;" title="Comments" />Comments</span>
(<span><?php echo $total_comment; ?></span>)


<br>

<button class='readmore_btn_no seeking_css1 btn btn-warning'><a title='Click to Read More' style='color:white;' 
href='reply.php?title=<?php echo $title_seo; ?>'>Read More & Reply/Comments</a></button>



                 
</div>

  <?php

                }
            ?>










<?php
if($post_type =='protest'){
?>
                    <div class="post well">



<span class='point_count'><span>Awards: </span> <?php echo $points; ?> Points</span>
<button class='readmore_btn'><a title='Click to access users Profile page' style='color:white;' href='profile.php?id=<?php echo $post_userid; ?>'><span style='font-size:20px;color:white;' class='fa fa-user'></span> View Users Profile & Connect</a></button><br>

<h3>Category: <?php echo $offering; ?>   on <?php echo $help_category; ?>  </h3><br>



<img class='' style='border-style: solid; border-width:3px; border-color:#800000; width:80px;height:80px; 
max-width:80px;max-height:80px;border-radius: 50%;' src='uploads/<?php echo $userphoto; ?>'><br>
<b style='color:#800000;font-size:18px;' >Name: <?php echo $fullname; ?> </b><br>


<b class='title_css'>Title: <?php echo $title; ?></b><br>
<b >Descriptions:</b><br><?php echo $content; ?> <br><br>


<button title='View Only this Protest on Map' class="map_css"><a target = "_blank" style="color:white;" href="protest_map_private.php?identity=<?php echo $timer1; ?>">
<i  style="color:white;font-size:30px;" class="fa fa-map-marker" aria-hidden="true"></i>
View Only this Protest on Map </a></button>&nbsp;&nbsp;

<button title='View All Protests on Map' class="map1_css"><a target = "_blank" style="color:white;" href="protest_map.php">
<i  style="color:white;font-size:30px;" class="fa fa-map-marker" aria-hidden="true"></i>
View All Protests on Map</a></button><br><br>


      
<span style='color:#800000;'><b> Time: </b> <span data-livestamp="<?php echo $timer1;?>"></span></span> <br>


<span style="font-size:26px;color:#800000;" class="fa fa-comments"></span> 
&nbsp;<span id="<?php echo $postid; ?>"  style="color:#800000;cursor:pointer;" title="Comments" />Comments</span>
(<span><?php echo $total_comment; ?></span>)


<br>

<button class='readmore_btn_no seeking_css1 btn btn-warning'><a title='Click to Read More' style='color:white;' 
href='reply.php?title=<?php echo $title_seo; ?>'>Read More & Reply/Comments</a></button>



                 
</div>

  <?php

                }
            ?>










            <?php

                }
            ?>



<!-- Main Post Database query ends here-->






</div>
<!--End Right-->

</div>
<!--Row-->








<style>

.title_css{
//background: green;
color:green;
cursor:pointer;
font-size:24px;

}


.title_css:hover{
//background: purple;
color:purple;

}



.seeking_css{
background: #800000;
color:white;
padding:6px;
cursor:pointer;
border:none;
border-radius:10%;
font-size:16px;
}

.seeking_css:hover{
background: black;
color:white;

}



.offering_css{
background: green;
color:white;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.offering_css:hover{
background: black;
color:white;

}



.cat_css{
background: #ec5574;
color:white;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.cat_css:hover{
background: black;
color:white;

}



</style>



<!--form START-->























<!-- footer Section start -->

<footer class=" navbar_footer text-center footer_bgcolor">

<div class="row">
        <div class="col-sm-12">

<p class="footer_text1"><?php echo $header_tit; ?></p>
<p class="footer_text2"><?php include('footer_title.php'); echo $footer_tit1; ?></p>
<br>

        </div>



        </div>

<br/>
  <p></p>
</footer>

<!-- footer Section ends -->








   
</body>
</html>



















