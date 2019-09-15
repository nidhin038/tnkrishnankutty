<?php
include("includes/header.php");
$page= "home";
if(isset($_GET['page']) && $_GET['page']){
	$page=$_GET['page'];
}
$isFileExists = file_exists($page.".php");

if(!$isFileExists){
$page="home"; 
}

include($page.".php");

include("includes/footer.php");
?>