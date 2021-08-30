<?php

	function connect(){
		$conn = new mysqli("localhost", "istiuq", "123", "mydb");
		if($conn->connect_errno){
			die("connection failed due to " .$conn->connect_error);
		}
		return $conn;
	}
	
	function register($firstName, $lastName, $dob, $gender, $company, $address, $phone, $email, 
        $userName ,$password){
		$conn = connect();
		$stmt = $conn->prepare("INSERT INTO users (firstname, lastname, dob, gender,company, address, phone, email, username , password) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?,?)");
		$stmt->bind_param("ssssssssss", $firstName, $lastName, $dob, $gender, $company, $address, $phone, $email, $userName ,$password);
		
		return $stmt->execute();
	}
	
	function login($userName ,$password){
		$conn = connect();
		$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? and password = ?");
		$stmt->bind_param("ss", $userName ,$password);
		$stmt->execute();
		$records = $stmt-> get_result();
		return $records->num_rows ===1;
	}

	



	
?>