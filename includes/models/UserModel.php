<?php

class UserModel
{
	public static function getDataById($userid)
	{
		$db = new Database();
		$sql = "SELECT * FROM user WHERE userid=".intval($userid);

		$result = $db->query($sql);

		if($db->numRows($result) > 0)
		{
			return $db->fetchObject($result);
		}

		return null;
	}

	public static function getAddressesByUserId($userId)
	{
		$db = new Database();

		$sql = "SELECT * FROM address WHERE userid=".intval($userId);
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

	public static function createNewUser($data)
	{
		$db = new Database();

		$sql = "INSERT INTO user(userid,firstname,lastname,username,mail,password) VALUES('".$db->escapeString($data['userid'])."','".$db->escapeString($data['firstname'])."','".$db->escapeString($data['lastname'])."','".$db->escapeString($data['username'])."','".$db->escapeString($data['mail'])."','".$db->escapeString($data['password'])."')";
		$db->query($sql);

		$data['id'] = $db->insertId();

		return (object) $data;
	}

	public static function saveUser($data)
	{
		$db = new Database();

		$sql = "UPDATE user SET firstname='".$db->escapeString($data['firstname'])."',lastname='".$db->escapeString($data['lastname'])."',username='".$db->escapeString($data['username'])."',mail='".$db->escapeString($data['mail'])."',password='".$db->escapeString($data['password'])."' WHERE id=".intval($data['id']);
		$db->query($sql);

		return (object) $data;
	}

	public static function deleteAddress($id)
	{
		$db = new Database();

		$sql = "DELETE FROM address WHERE id=".intval($id);
		$db->query($sql);
	}
}