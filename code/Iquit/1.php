<?php
//basic email validation
//$fullname = trim($_post['fullname']);
//$password = trim($_post['password']);
//$email = trim($_post['email']);

function test() {
	return false;
}
//
//function isValidEmail($email, &$msg){
//
//	
//    $error = false;
//    if (empty($email) {
//			$error = true;
//			$msg = "Please enter valid email address.";
//    } else {
//			// check email exist or not
//			$query = "SELECT email FROM members WHERE email='$email'";
//			$result = mysql_query($query);
//			$count = mysql_num_rows($result);
//			if($count!=0){
//				$error = true;
//				$msg = "Provided Email is already in use.";
//			}
//    }
//    return !$error;   
//}
//
//// password validation
//function isValidpassword($password,&$msg){
//    if (empty($password)){
//			$error = true;
//			$passError = "Please enter password.";
//		} else if(strlen($password) < 6) {
//			$error = true;
//			$passError = "Password must have at least 6 characters.";
//		}
//}
//
//// basic name validation
//function isValidfullname($fullname){
//		if (empty($fullname)) {
//			$error = true;
//			$nameError = "Please enter your full name.";
//		} else if (strlen($fullname) < 3) {
//			$error = true;
//			$nameError = "Name must have atleat 3 characters.";
//		} else if (!preg_match("/^[a-zA-Z ]+$/",$fullname)) {
//			$error = true;
//			$nameError = "Name must contain alphabets and space.";
//		}
//}
////basic birthday validation
//function validateDate($date)
//{
//    $d = DateTime::createFromFormat('Y-m-d', $date);
//    return $d && $d->format('Y-m-d') === $date;
//}
?>
