<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>


<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<title>SXSW Crush</title>
<LINK REL="STYLESHEET" TYPE="text/css" HREF="css/main.css" />
</head>
<body>

<div id="wrapper">
<h1>Thanks! We sent that along.</h1>
<p>Want to send some more love?</p>
<!-- Send message to Twitter -->
<?php
if(isset($_POST['twitter_msg']) && !isset($error)){?>
<div class="msg"><?php echo $twitter_status ?></div>
<?php } else if(isset($error)){?>
<div class="msg">Error: Shart! We effed up.</div>
<?php }?>
		<form action="insertTwitterMsg.php" method="post">
		<textarea name="twitter_msg" type="text" id="twitter_msg" size="40" maxlength="140"/></textarea>
		<div class="tweet-button"><input type="submit" name="button" id="button" value="tweet" class="button"></div>
		</form>

<?php
/* ---------------------------------------- */
// Change these parameters with your Twitter
// user name and Twitter password.
/* ---------------------------------------- */
$twitter_username ='sxswcrush';
$twitter_psw ='ruckus!!!';
/* ---------------------------------------- */

/* Don't change the code belove
/* ---------------------------------------- */
require('twitterAPI.php');
if(isset($_POST['twitter_msg'])){
$twitter_message=$_POST['twitter_msg'];
if(strlen($twitter_message)<1){ $error=1; } else { $twitter_status=postToTwitter($twitter_username, $twitter_psw, $twitter_message); } }
/* ---------------------------------------- */
?> 		

	</div>
<div class="footer"><p><a href="http://www.twitter.com/skinny">a project by @skinny</a> &nbsp;. &nbsp;<a href="/">skinnywhitegirl.com</a></p></div>
</div>
</div>


</body>
</html>



