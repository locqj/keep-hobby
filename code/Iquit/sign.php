<?php 
$servername = "localhost"; //服务器
$username = "root"; //用户名
$password = "root"; //密码
$dbname = "Siqi"; //数据库名


if ($_GET[‘do‘]==‘getDay‘){ 


// 创建连接
$conn = new mysqli("localhost", "root", "root", "Siqi");
// 检测连接

　　$uid=2; $getDay="SELECT `signdays` FROM `user1` WHERE `id`= {$uid}"; $day=$db -> query($getDay); $days =$day -> fetch_array(MYSQLI_ASSOC); echo $days[‘signdays‘]; 
 } 

if ($_GET[‘do‘]==‘sign‘){

 　　$db=new mysqli(‘localhost‘,‘root‘,‘123456‘,‘sign‘);

 　　$uid=2; 

　　$time=time(); 

　　//check sign today 

　　$todayBegin=strtotime(date(‘Y-m-d‘)." 00:00:00"); 

　　$todayEnd= strtotime(date(‘Y-m-d‘)." 23:59:59"); 

　　$checkSignSql="SELECT * FROM `sign` WHERE `uid` = {$uid} AND `dateline` < {$todayEnd} AND `dateline` > {$todayBegin} "; 

　　$checkSignToday= $db -> query($checkSignSql); 

　　$checkSign = $checkSignToday -> fetch_array(MYSQLI_ASSOC);

 　　if (empty($checkSign)){ 

　　　　$sql="SELECT * FROM `sign` WHERE `uid` = {$uid} "; 

　　　　$return = $db -> query($sql) -> fetch_array(MYSQL_ASSOC);

　　　　//check sign table exist uid record 

　　　　if (empty($return)){//no

 　　　　　　$insertSql="INSERT INTO `sign` (`uid`,`dateline`) VALUES (‘{$uid}‘,‘{$time}‘) "; 

　　　　　　 $insert = $db -> query($insertSql); 

　　　　 　　$updateSignSql="UPDATE `user` SET `signdays` =1 WHERE `id` = {$uid} ";

 　　　　　　$db -> query($updateSignSql); echo 1; 
 　　　　}else{ 
　　　　　　// check is continuous ? reset with login set signdays as 0 !!!!!  

　　　　　　$yesterdayBegin= strtotime(date("Y-m-d",strtotime("-1 day"))." 00:00:00"); 

　　　　　　$yesterdayEnd= strtotime(date("Y-m-d",strtotime("-1 day"))." 23:59:59"); 

　　　　　　$checkContinuSql="SELECT * FROM `sign` WHERE `uid` = {$uid} AND `dateline` < {$yesterdayEnd} AND `dateline` > {$yesterdayBegin}"; $checkContinuYesterday = $db ->query($checkContinuSql) -> fetch_array(MYSQL_ASSOC); 　　　　　　　　　

　　　　　　if (!empty($checkContinuYesterday)){ 　　　　　　　　　　　

　　　　　　　　$replaceSql="REPLACE INTO `sign` (`uid`,`dateline`) VALUES (‘{$uid}‘,‘{$time}‘) "; 　　　　　　　　　　　

　　　　　　　　$replace=$db -> query($replaceSql); 

　　　　　　　　$updateSignSql="UPDATE `user1` SET `signdays` = `signdays` + 1 WHERE `id` = {$uid} ";

　　　　　　　　$db -> query($updateSignSql); echo 1; 

　　　　　　}else{
　　　　　　　　　　
　　　　} 
　　} 
}else{ 　　　　　　

　　echo 2;// allready sign. 　　　　

} 

?>
