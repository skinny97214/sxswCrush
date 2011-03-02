<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>


<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<title>SXSW Crush</title>
<LINK REL="STYLESHEET" TYPE="text/css" HREF="css/main.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" ></script>
<script src="scripts/jquery.livetwitter.js" type="text/javascript"></script>

<script type="text/javascript" src="scripts/charCount.js"></script>
<script type="text/javascript">
	$(document).ready(function(){	
		//default usage
		$("#twitter_msg").charCount();
		//custom usage
		$("#message2").charCount({
			allowed: 50,		
			warning: 20,
			counterText: 'Characters left: '	
		});
	});
</script>

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
		<form action="insertTwitterMsg.php" method="post" name="twitter_form" class="twitter_form">
		<textarea name="twitter_msg" type="text" id="twitter_msg" size="40" maxlength="140"/ onclick="document.twitter_form.twitter_msg.value='';" >My SXSW crush is... because she's so smart.</textarea>
		<input class="button tweet-button" type="submit" name="button" id="button" value="tweet">
		</form>
		
		
		
	<h2>Latest love sent from <a href="http://twitter.com/sxswcrush">@sxswcrush</a></h2>
		<div id="twitterUserTimeline" class="tweets"></div>
	
		<script type="text/javascript">
	
			// Basic usage
			$('#twitterSearch').liveTwitter('bacon', {limit: 5, rate: 5000});
			$('#twitterUserTimeline').liveTwitter('sxswcrush', {limit: 15, refresh: false, mode: 'user_timeline'});
	
			// Changing the query
			$('#searchLinks a').each(function(){
				var query = $(this).text();
				$(this).click(function(){
					// Update the search
					$('#twitterSearch').liveTwitter(query);
					// Update the header
					$('#searchTerm').text(query);
					return false;
				});
			});
	
		</script>
		
	</div>
<div class="footer"><p><a href="http://www.twitter.com/skinny">a project by @skinny</a> &nbsp;. &nbsp;<a href="/">skinnywhitegirl.com</a></p></div>
</div>


</body>
</html>