<?php
	$sitetitle = "P2: XKCD Password Generator";
	
	$err = "";
	$numwords = 4;
	
	if (isset($_POST['words']) && is_numeric($_POST['words']))
	{
		$numwords = $_POST['words'];
	}
	else if (isset($_POST['words']))
	{
		$err = '<p class="error">Number of Words must be numeric.</p>';
	}
	
	$usenum = $_POST['inc_num'] == 1 ? true : false;
	$usechar = $_POST['inc_char'] == 1 ? true : false;
?>
