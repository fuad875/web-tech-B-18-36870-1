<?php


	function getConnection($servername, $dbuser, $dbpass, $database){

		$conn = mysqli_connect($servername, $dbuser, $dbpass, $database);
		return $conn;
	}

function userValidate($username, $password){
    
    $sql = "select * from login where username = '$username' AND password = '$password'";
    
    $conn = getConnection('localhost', 'root', '', 'dbsystem');
    
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    if(!empty($row)){
        
        if($row['user_type']=="Client"){
            
            session_start();
            $_SESSION['userType'] = $row['user_type'];
            $_SESSION['username'] = $row['username'];
            setcookie("username", $row['username'], time()+2000, '/');
            return true;
            
        }
        
     
        
        elseif($row['user_type']=="Admin")
        {
            
            session_start();
            $_SESSION['userType'] = $row['user_type'];
            $_SESSION['username'] = $row['username'];
            setcookie("username", $row['username'], time()+1000, '/');
            return true;
            
        }
      
        
        
    }
    else{
        
        return false;
        
    }
    
}

?>