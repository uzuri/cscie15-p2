<?php

function getword()
{
	//Open the dictionary file and stick it in array
	$allwords = file("/usr/share/dict/words");
	echo count($allwords);
}


?>
