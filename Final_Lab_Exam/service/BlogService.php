<?php
	require_once('../db/db.php');

	function getByID($id){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from blog where id={$id}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getAllUser(){
		$conn = dbConnection();

		if(!$conn){
			echo "DB connection error";
		}

		$sql = "select * from blog";
		$result = mysqli_query($conn, $sql);
		$blog = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($blog, $row);
		}

		return $blog;
	}


	