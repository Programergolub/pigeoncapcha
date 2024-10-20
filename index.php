<?php
session_start();
$status = '';
if ( isset($_POST['captcha']) && ($_POST['captcha']!="") ){
// Validation: Checking entered captcha code with the generated captcha code
if(strcasecmp($_SESSION['captcha'], $_POST['captcha']) != 0){
// Note: the captcha code is compared case insensitively.
// if you want case sensitive match, check above with strcmp()
$status = "<p style='color:#FFFFFF; font-size:20px'>
<span style='background-color:#FF0000;'>Entered captcha code does not match! 
Kindly try again.</span></p>";
}else{
$status = "<p style='color:#FFFFFF; font-size:20px'>
<span style='background-color:#46ab4a;'>Your captcha code is match.</span>
</p>";	
	}
}
echo $status;
?>