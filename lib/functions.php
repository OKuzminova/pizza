<?php
	$mysqli=false;
	function connectDB(){
		global $mysqli;
		$mysqli = new mysqli("localhost","root","","mydatabase");
		$mysqli->query('SET NAMES utf-8');
		}
	function closeDB(){
		global $mysqli;
		$mysqli->close();
		}
	function getAllArticles(){
		global $mysqli;
		connectDB();
		$result_set=$mysqli->query("SELECT * FROM `articles`");
		closeDB();
		return resultSetToArray($result_set);
	}
	function resultSetToArray($result_set){
		$array=array();
		while(($row=$result_set->fetch_assoc()) !=false)
			$array[]=$row;
		return $array;
	}	
	function getArticle($id){
	global $mysqli;
	connectDB();
	$result_set=$mysqli->query("SELECT * FROM `articles` WHERE `id`='$id'");
	closeDB();
	return $result_set->fetch_assoc();
	}
	function getAllBanners(){
	global $mysqli;
	connectDB();
	$result_set=$mysqli->query("SELECT * FROM `banners`");
	closeDB();
	return resultSetToArray($result_set);
	}
	function addGuestBookComment($name,$comment){
	global $mysqli;
	connectDB();
	$success=$mysqli->query("INSERT INTO `guestbook` (`name`,`comment`) VALUES ('$name','$comment') ");
	closeDB();
	return $success;
	}
	function getAllGuestBookComments(){
		global $mysqli;
		connectDB();
		$result_set=$mysqli->query("SELECT * FROM `guestbook`");
		closeDB();
		return resultSetToArray($result_set);
	}
	function addUser($email, $password){
	global $mysqli;
	connectDB();
	$success=$mysqli->query("INSERT INTO `users` (`email`,`password`) VALUES ('$email','$password') ");
	closeDB();
	return $success;
	}
	function checkUser($email, $password){
	global $mysqli;
	connectDB();
	$result_set=$mysqli->query("SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'");
	closeDB();
	if($result_set->fetch_assoc()) return true;
	else return false;
	}
	function searchArticles($words){
	$query_search="";
	$arraywords = explode(" ",$words);
	foreach($arraywords as $key=>$value){
		if(isset($arraywords[$key - 1])) $query_search.=" OR ";
		$query_search.="(`full_text` LIKE '%$value%' OR `title` LIKE '%$value$')";
	}
	global $mysqli;
	connectDB();
	$result_set=$mysqli->query("SELECT * FROM `articles` WHERE $query_search");
	closeDB();
	return resultSetToArray($result_set);
	}
	function isAdmin($email){
	global $mysqli;
	connectDB();
	$result_set = $mysqli->query("SELECT * FROM `users` WHERE `email`='$email'");
	$row = $result_set->fetch_assoc();
	closeDB();
	return $row["admin"];
	}
	function addArticle($title,$intro_text,$full_text){
	global $mysqli;
	connectDB();
	$success=$mysqli->query("INSERT INTO `articles` (`title`,`intro_text`,`full_text`) VALUES ('$title','$intro_text','$full_text') ");
	closeDB();
	return $success;
	}
	?>
