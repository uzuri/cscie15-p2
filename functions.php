<?php

function getword($allwords, $numwords)
{
	return array_rand($allwords, $numwords);
}

function loadwords()
{
	return file("/usr/share/dict/words");
}

?>
