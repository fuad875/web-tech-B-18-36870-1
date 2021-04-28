<?php

require_once('databaseConnect.php');





function adminRegistration($name, $password, $username, $email, $gender, $dob)
{
    
    $sql = "insert into admin (a_name, a_password, a_username, a_email, a_gender, a_dob) values ('$name', '$password', '$username', '$email', '$gender', '$dob')";
    
    $conn = getConnection('localhost', 'root', '', 'dbsystem');
    
    if(mysqli_query($conn, $sql))
    {
        
        return true;
            
    }
    else
    {
        
        return false;
        
    }
    
}


function getUsersInformation($username)
{

    $conn = getConnection('localhost', 'root', '', 'dbsystem');
    $sql = "select * from admin where a_username = '$username'";
    $result = mysqli_query($conn, $sql);

    $userInfo =[];

    while($data = mysqli_fetch_assoc($result))
    {
        array_push($userInfo, $data);
    }

    return $userInfo;
}



function getClientname()
{

    $conn = getConnection('localhost', 'root', '', 'dbsystem');
    $sql = "select * from client";
    $data = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($data))
    {
        echo "<tr><td>". $row["c_id"] . "</td><td>". $row["c_name"]."</td><td><a href='../view/admin_assign_manager.php?id=".$row['c_id']."'>Assign</a></td><td><a href='../php/admin_ClientblockService.php?id=".$row['c_id']."'>Block</a></td><td><a href='../php/admin_client_unblock.php?id=".$row['c_id']."'>Unblock</a></td></tr>";
    }
    
}




function getClientInfo()
{

    $conn = getConnection('localhost', 'root', '', 'dbsystem');
    $sql = "select * from client";
    $data = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($data))
    {
        echo "<tr><td>". $row["c_id"] . "</td><td>". $row["c_name"]. "</td><td>". $row["c_username"] ."</td><td>".  $row["c_email"] . "</td><td>". $row["c_dob"]. "</td><td>". $row["c_gender"].  "</td></tr>";
    }
    
}


function updateClientInfo()
{

    $conn = getConnection('localhost', 'root', '', 'dbsystem');
    $sql = "select * from client";
    $data = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($data))
    {
        echo "<tr><td>". $row["c_id"] . "</td><td>". $row["c_name"]. "</td><td>". $row["c_username"] ."</td><td>".  $row["c_email"] . "</td><td>". $row["c_dob"]. "</td><td>". $row["c_gender"].  "</td><td><a href='../view/admin_update_client.php?id=".$row['c_id']."'>Update</a></td><td><a href='../php/admin_clientinfo_delete.php?id=".$row['c_id']."'>Delete</a></td></tr>";
    }
    
}


function getClientInfoById($id)
{
    $conn = getConnection('localhost', 'root', '', 'dbsystem');
    $sql = "select * from client where c_id = $id";
    $result = mysqli_query($conn, $sql);

    $userInfo =[];
    while($data = mysqli_fetch_assoc($result))
    {
        array_push($userInfo, $data);
    }

    return $userInfo;
    
}

function updateClient($name, $username, $email, $dob, $gender, $id)
{
    $conn = getConnection('localhost', 'root', '', 'dbsystem');
    $sql = "update client SET c_name='$name',c_username='$username',c_email='$email',c_dob='$dob',c_gender='$gender' where c_id=$id";
    
    if(mysqli_query($conn, $sql))
    {
        return true;
    }
    else
    {   
        return false;   
    }
}







function publishNotice($name, $date, $star_time, $end_time)
{
    
    $conn = getConnection('localhost', 'root', '', 'dbsystem');
    $sql = "insert into notice (n_name, n_date, n_startTime, n_endTime) values ('$name', '$date', '$star_time', '$end_time')";

    if(mysqli_query($conn, $sql))
    {
        
        return true;    
        
    }
    else
    {
        
        return false;
        
    }
    
}

function updateNoticeInfo()
{

    $conn = getConnection('localhost', 'root', '', 'dbsystem');
    $sql = "select * from notice";
    $data = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($data))
    {
        echo "<tr><td>". $row["n_id"] . "</td><td>". $row["n_name"]. "</td><td>". $row["n_date"] ."</td><td>".  $row["n_startTime"] . "</td><td>". $row["n_endTime"] . "</td><td><a href='../view/admin_update_notice.php?id=".$row['n_id']."'>Update</a></td><td><a href='../php/admin_delete_notice.php?id=".$row['n_id']."'>Delete</a></td></tr>";
    }
    
}





function getNoticeInfoById($id)
{
    $conn = getConnection('localhost', 'root', '', 'dbsystem');
    $sql = "select * from notice where n_id = $id";
    $result = mysqli_query($conn, $sql);

    $userInfo =[];
    while($data = mysqli_fetch_assoc($result))
    {
        array_push($userInfo, $data);
    }

    return $userInfo;
    
}


function updateNotice($name, $date, $start_time,$end_time, $id)
{
    $conn = getConnection('localhost', 'root', '', 'dbsystem');
    $sql = "UPDATE notice SET n_name='$name',n_date='$date',n_startTime='$start_time',n_endTime='$end_time' where n_id=$id";
   
    if(mysqli_query($conn, $sql))
    {
        return true;
    }
    else
    {   
        return false;   
    }
}



    
