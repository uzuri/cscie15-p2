<?php

$sitetitle = "P2: XKCD Password Generator";

include("header.inc");
include("functions.php");

?>
<h1><?php echo $sitetitle; ?></h1>



<p class="pass"><strong>Your Password: </strong></p>
<form method="post" action="index.php">
<p><label for="words">Number of Words: </label><input name="words" type="number" value="4" min="1" max="20" /></p>
<p><label for="inc_num">Include a number?</label><input name="inc_num" type="radio" value="Yes" /> Yes | <input name="inc_num" type="radio" value="No" /> No</p>
<p><label for="inc_char">Include a special character (!,@,#,$,%, etc.)?</label><input name="inc_char" type="radio" value="Yes" /> Yes | <input name="inc_char" type="radio" value="No" /> No</p>

<p><input type="submit" value="Give me another password" /></p>
</form>


<p>XKCD passwords use a style of password generation put forward by comic author/illustrator Randall Munroe in comic 936.  The technique essentially uses words in place of numbers to expand the password entropy while easing rememberability.  But Randall explains it best in the original comic: </p>

<p><a href="http://xkcd.com/936/"><img src="http://imgs.xkcd.com/comics/password_strength.png" /></a></p>

<p>This page generates XKCD-style passwords for you to use.  By default it will give you a four-word, all-lowercase passphrasephrase, but you can request different settings below.</p>



<?php

include("footer.inc");
?>
