<!DOCTYPE html>
<html lang="en">
<head>
<title>Music Theory Website</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="musictheory.css">

<!-- This is a shim code after the link element that addists internet explorer 8 and erlier versions. -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->

</head>
<body>
<div id="wrapper">
<header>
	<div id="trebleClef">
	<h1>Music Theory</h1>
	<h2>A website for songwriters.</h>
	</div>
</header>
<nav>
	<ul>
		<li><a href="index.html">Home</a></li>
		<li><a href="scalesAndChords.html">Scales / Chords</a></li>
		<li><a href="harmony.html">Harmony</a></li>
		<li><a href="progression.html">Progression</a></li>
		<li><a href="rhythm.html">Rhythm</li>
		<li><a href="recording.html">Recording</a></li>
		<li><a href="instruments.html">Instruments</a></li>
		<li><a href="contact.html">Contact / Comments</a></li>
	</ul>
</nav>
<main>
	<h2>Contact</h2>
	<p>Please leave a comment!<br>
	Soundcloud hyperlinks...<br>
	Spotify Playlist hyperlinks...<br>
	Etc.<br>
	</p>
	
<!-- Form here	 -->
	
	<form action="" method="POST">

		<label> Name:
			<input type="text" name="Name" class="Input" style="width: 225px" required>
		</label>
		<br><br>
		<label> Comment: <br>
			<textarea name="Comment" class="Input" style="width: 300px" required></textarea>
		</label>
		<br><br>
		<input type="submit" name="Submit" value="Submit Comment" class="Submit">
	
	</form>
	
</main>


<footer>
	<small><i>Copyright &copy; 2018 Mitch Hogue</i></small><br>
	<small><i><a href="mailto:1.mitch.hogue@gmail.com">1.mitch.hogue@gmail.com</a></i></small><br>
</footer>
</div>
</body>
</html>


	
<!-- Embedded php for above form -->
<?php

	if($_POST['Submit']){
		print "<h1>Your comment has been submitted!</h1>";
		
		$Name = $_POST['Name'];
		$Comment = $_POST['Comment'];
		
		#Get old comments
		$old = fopen("comments.txt", "r+t");
		$old_comments = fread($old, 1024);
		
		#Delete everything, write down new and old comments
		$write = fopen("comments.txt", "w+");
		$string = "<b>".$Name."</b><br>".$Comment."<br>\n".$old_comments;
		fwrite($write, $string);
		fclose($write);
		fclose($old);
	}
	
	#Read comments
	$read = fopen("comments.txt", "r+t");
	echo "<br><br>Comments<hr>.fread($read, 1024);
	fclose($read);

?>


