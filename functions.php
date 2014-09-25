<?php

function getword($allwords, $numwords)
{
	$keys = array_rand($allwords, $numwords);
	$words = array();
	for ($i = 0; $i < count($keys); $i++)
	{
		$words[] = $allwords[$keys[$i]];
	}
	return $words;
}

function loadwords()
{
	return file("/usr/share/dict/words");
}

?>
