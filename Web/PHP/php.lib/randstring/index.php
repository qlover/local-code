<?php
// 控制器页面
require './RandStr.class.php';

function readable_random_string($length){ 
	$conso=array("b","c","d","f","g","h","j","k","l", "m","n","p","r","s","t","v","w","x","y","z"); 
	$vocal=array("a","e","i","o","u"); 
	$password=""; 
	$max = $length/2; 
	for($i=1; $i<=$max; $i++) 
	{ 
		$password.=$conso[rand(0,19)]; 
		$password.=$vocal[rand(0,4)]; 
	}
	return $password;
}
$string = readable_random_string(10);

$stro = new RandStr();


$user = !empty($_GET['s']) ? $_GET['s'] : '';
$user = 'rand'. $user . 'Str';

$numstr = $stro->randNumberStr();
$letterstr = $stro->randLetterStr();
$charstr = $stro->randCharStr();
$randstr = $stro->randStr();
// $crestr = $stro->createStr();
$userstr = $stro->$user();

include './index.html';
