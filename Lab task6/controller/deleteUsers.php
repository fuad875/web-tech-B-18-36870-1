<?php

require_once('databaseConnect.php');

if(isset($_REQUEST['msg'])){
    
    $conn = getConnection();
    deleteUser($conn, $_REQUEST['msg']);
    
}

?>