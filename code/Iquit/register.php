<?php
if(!isset($_POST['submit'])){
    exit('wrong!');
}
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


//database 
include('conn.php');
//check user is exist
$check_query = mysql_query("select uid from members where username='$username' limit 1");
if(mysql_fetch_array($check_query)){
    echo 'wrong：username ',$username,' exist。<a href="javascript:history.back(-1);">Return</a>';
    exit;
}
//put data into database
$password = MD5($password);
$data = time();
$sql = "INSERT INTO user(username,password,email,birthday)VALUES('$username','$password','$email',
$birthday)";
if(mysql_query($sql,$conn)){
    exit('successful！Click <a href="login.html">Login</a>');
} else {
    echo 'sorry！fail：',mysql_error(),'<br />';
    echo 'click <a href="javascript:history.back(-1);">return</a> Try again';
}
?>