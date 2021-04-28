<?php


require_once('databaseConnect.php');

function userRegistration($username, $password, $userType){
    
    $conn = getConnection('localhost', 'root', '', 'dbsystem');
    $sql = "insert into login (username, password, user_type) values ('$username', '$password', '$userType')";
    
    if(mysqli_query($conn, $sql)){
        
        return true;
        
        
    }
    else{
        
        return false;
        
    }
    
}

function clientRegistration($name, $password, $username, $email, $gender, $dob){
    
    $sql = "insert into client (c_name, c_password, c_username, c_email, c_gender, c_dob) values ('$name', '$password', '$username', '$email', '$gender', '$dob')";
    
    $conn = getConnection('localhost', 'root', '', 'dbsystem');
    
    if(mysqli_query($conn, $sql)){
        
        return true;
        
        
    }
    else{
        
        return false;
        
    }
    
}

function getUserInformation($username){

		$conn = getConnection('localhost', 'root', '', 'dbsystem');
		$sql = "select * from client where c_username = '$username'";
		$result = mysqli_query($conn, $sql);

		$userInfo =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($userInfo, $data);
		}

		return $userInfo;
	}

function updateClientInformation($name, $email, $dob, $id){
    
    $conn = getConnection('localhost', 'root', '', 'dbsystem');
    $sql = "update client set c_name = '$name', c_email = '$email', c_dob = '$dob' where c_id = $id";
    
    if(mysqli_query($conn, $sql)){
        
        return true;
        
    }
    
    else{
        
        return false;
        
    }
    
}

function updateClientPassword($username, $password){
    
    $conn = getConnection('localhost', 'root', '', 'dbsystem');
    $sql = "update client set c_password = '$password' where c_username = '$username'";
    
    if(mysqli_query($conn, $sql)){
        
        $sql2 = "update login set password = '$password' where username = '$username'";
        mysqli_query($conn, $sql2);
        return true;
        
        
    }
    
    else{
        
        return false;
        
    }
}











?>