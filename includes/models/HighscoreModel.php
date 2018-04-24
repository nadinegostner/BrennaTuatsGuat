<?php

class HighscoreModel
{
	public static function saveHighscore($userid, $score, $difficulty)
	{
	    $db = new Database();

	    $userid = $db->escapeString($userid);
	    $score = $db->escapeString($score);
	    $difficulty = $db->escapeString($difficulty);

	    $sql = "INSERT INTO `highscore`(`playerid`,`score`,`difficulty`) VALUES('".$userid."','".$score."','".$difficulty."')";

		$db->query($sql);

	}

	public static function getAllScores()
	{
		$db = new Database();

		$sql = "SELECT * FROM highscore ORDER BY score DESC";
		$result = $db->query($sql);

		if($db->numRows($result) > 0)
		{
			$userArray = array();

			while($row = $db->fetchObject($result))
			{
				$userArray[] = $row;
			}

			return $userArray;
		}

		return null;
	}


}