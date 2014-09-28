<?php

function buildpass($words, $usenum, $usechar)
{
	srand(time());
	if ($usenum)
	{
		$num = rand(0, 9);
		$words[] = $num;
	}
	if ($usechar)
	{
		// Leave out some special chars that have sites have given me
		// trouble over in the past, like *
		$chars = array("!", "@", "#", "$", "%", "^", "&", "(", ")", "?", "+", "-", "_", "=");
		$char = rand(0, count($chars) - 1);
		$words[] = $chars[$char];
	}
	
	$basepass = trim(strtolower(implode(" ", $words)));
	return $basepass;
}

function getwords($allwords, $numwords)
{
	$i = 0;
	$words = array();
	while ($i < $numwords)
	{
		$key = array_rand($allwords, 1);
		$word = $allwords[$key];
		if (!preg_match("/'/", $word))
		{
			$words[] = $word;
			$i++;
		}
	}
	return $words;
}

function loadwords()
{
	return file("/usr/share/dict/words");
}

?>
