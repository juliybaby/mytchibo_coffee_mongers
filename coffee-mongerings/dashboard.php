﻿<?php
//error_reporting(0); 
?>



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
//padding:16px;color:white;

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
color:black;

}


.icc:hover {
color:black;
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



 <li class="navgate"><a title='Create New Post' href="create_post.php" style="color:orange;font-size:14px;">Create New Posts</a></li>       

<li class="navgate"><a title='Create New Video' href="create_video.php" style="color:orange;font-size:14px;">Create New Video</a></li> 



</li>






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
<h4 style='color:blue;'>Real-time Notification Alert</h4>
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
<div class='col-sm-3'>

Learn and educate community members on how to Mix and Make Tchibo Coffee types, Coffee Flavours,
Tastes etc for the Following Category  of People

<br><br>
<li class='seeking_css'><a style='color:white;' href="dashboard_requset.php?data_type=Child-Care">Child-Care</a></li>
<li class='seeking_css'><a style='color:white;' href="dashboard_requset.php?data_type=Elderly-Care">Elderly-Care</a></li>
<li class='seeking_css'><a style='color:white;' href="dashboard_requset.php?data_type=Students">Students</a></li>
<li class='seeking_css'><a style='color:white;' href="dashboard_requset.php?data_type=The-Sick">The Sick Eg. Diabetics, Cancers Patients etc.</a></li>
<li class='seeking_css'><a style='color:white;' href="dashboard_requset.php?data_type=Pregnant-Women">Pregnant Women</a></li>
<li class='seeking_css'><a style='color:white;' href="dashboard_requset.php?data_type=Boys">Boys</a></li>
<li class='seeking_css'><a style='color:white;' href="dashboard_requset.php?data_type=Girls">Girls</a></li>
<li class='seeking_css'><a style='color:white;' href="dashboard_requset.php?data_type=Athelets">Athelets</a></li>
<li class='seeking_css'><a style='color:white;' href="dashboard_requset.php?data_type=Lactating-Mother">Lactating Mother</a>
</li>



<li class='seeking_css'><a style='color:white;' href="dashboard_requset.php?data_type=Tchibo-Coffee-Education">Tchibo Coffee Education</a></li>

<li class='seeking_css'><a style='color:white;' href="dashboard_requset.php?data_type=Tchibo-Coffee-Machine-Operation">Tchibo-Coffee-Machine-Operation</a></li>

<li class='seeking_css'><a style='color:white;' href="dashboard_requset.php?data_type=Others">Others</a></li>
</div>

<!--End Left-->










<!--Start Right-->
<div class='col-sm-9'>






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

$result = $db->prepare("SELECT * FROM posts order by id desc");
$result->execute(array());

$count_post = $result->rowCount();
if($count_post ==0){
echo "<div style='background:red;color:white;padding:10px;border:none;'>No Data Posted Yet.. <b></b></div>";
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

                }
            ?>



<!-- Main Post Database query ends here-->

</div>








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




.seeking_css1{
background: #ec5574;
color:white;
padding:6px;
cursor:pointer;
border:none;
border-radius:10%;
font-size:16px;
}

.seeking_css1:hover{
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


















