<?php

function buildpass($words, $usenum, $usechar)
{
	srand(microtime());
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
	// Because wordlist contains apostrophes, we can't just use array_rand
	// the easy way
	$keys = array();
	for ($i = 0; $i < $numwords; $i++)
	{
		// There's probably a faster way to do this, this'll do
		$success = false;
		while (!$success)
		{
			$temp = array_rand($allwords, 1);
			if (substr_count($temp, "'") == 0)
			{
				$success = true;
			}
				
		}
		$keys[] = $temp;
	}
	
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
