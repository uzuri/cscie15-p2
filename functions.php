<?php

function buildpass($words, $usenum, $usechar)
{
	srand(time());
	// Random numbers and characters
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
	
	// Put it all together
	$basepass = trim(strtolower(implode(" ", $words)));
	return $basepass;
}

function getwords($allwords, $numwords)
{
	$i = 0;
	$words = array();
	// Because of apostrophes and non alpha characters, we might
	// have to throw back initial picks from array_rand
	// Can't decide if this is faster than an initial array walk on 
	// loadwords, but I think it is for the most part.  
	while ($i < $numwords)
	{
		$key = array_rand($allwords, 1);
		$word = $allwords[$key];
		if (preg_match('/^[a-zA-Z0-9]+$/', $word))
		{
			$words[] = $word;
			$i++;
		}
	}
	return $words;
}

function loadwords()
{
	// Load system dictionary
	return file("/usr/share/dict/words");
}

?>
