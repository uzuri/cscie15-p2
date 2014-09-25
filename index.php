<?php
$sitetitle = "P2: XKCD Password Generator";
echo $sitetitle;

include("header.inc");
include("functions.php");

?>
<h1><?php echo $sitetitle; ?></h1>

<p>XKCD passwords use a style of password generation put forward by comic author/illustrator Randall Munroe in comic 936.  The technique essentially uses words in place of numbers to expand the password entropy while easing rememberability.  But Randall explains it best in the original comic: </p>

<p><a href="http://xkcd.com/936/"><img src="http://imgs.xkcd.com/comics/password_strength.png" /></a></p>

<p>This page generates XKCD-style passwords for you to use.  By default it will give you a four-word, all-lowercase passphrasephrase, but you can request different settings below.</p>

<?php

include("footer.inc");
?>
