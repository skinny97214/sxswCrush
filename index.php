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
<img src="images/sxsw-crush-logo.png" class="logo">		
<h1>Who do you have a crush on at SxSW?</h1>
<p>Tell us who and why and we'll tweet it out anonymously from <a href="http://www.twitter.com/sxswcrush">@sxswcrush</a>.</p>	
<p>If you don’t know the hottie’s name, tag it <strong>#isawyou</strong></p>
<!-- Send message to Twitter -->
<?php
if(isset($_POST['twitter_msg']) && !isset($error)){?>
<div class="msg"><?php echo $twitter_status ?></div>
<?php } else if(isset($error)){?>
<div class="msg">Error: Shart! We effed up.</div>
<?php }?>
		<form action="insertTwitterMsg.php" method="post" name="twitter_form">
		<textarea name="twitter_msg" type="text" id="twitter_msg" size="40" maxlength="140"/ onclick="document.twitter_form.twitter_msg.value='';">My SXSW crush is... because she's so smart.</textarea>
		<div class="tweet-button">
		<input class="button" type="submit" name="button" id="button" value="tweet"></div>
		</form>
		
	</div>
<div class="footer"><p><a href="http://www.twitter.com/skinny">a project by @skinny</a> &nbsp;. &nbsp;<a href="/">skinnywhitegirl.com</a></p></div>
</div>


</body>
</html>