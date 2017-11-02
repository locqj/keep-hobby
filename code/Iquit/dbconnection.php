<?php
$message = '';
$db = new mysqli("localhost",'siqi','Lisiqi77','user');
if($db->connect_error){
    $message = $db->connect_error;
    
}else{
    echo $message;
}