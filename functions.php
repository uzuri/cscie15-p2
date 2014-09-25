<?php

function buildpass($words, $usenum, $usechar)
{
	srand(time());
	if ($usenum)
	{
		$num = rand(0, 9);
		$basepass .= $num;
	}
	if ($usechar)
	{
		// Leave out some special chars that have sites have given me trouble over in the past, like *
		$chars = array("!", "@", "#", "$", "%", "^", "&", "(", ")", "?", "+", "-", "_", "=");
		$char = rand(0, count($chars) - 1);
		$basepass .= $chars[$char];
	}
	
	$basepass = trim(strtolower(implode(" ", $words)));
	return trim($basepass);
}

function getwords($allwords, $numwords)
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
