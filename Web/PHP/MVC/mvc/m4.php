<?php
require './ShowTime.class.php';
$sto =  new ShowTime();

if( !empty($_GET['get']) && $_GET['get'] === 'd'){
	$time = $sto->getDate();
}else if( !empty($_GET['get']) && $_GET['get'] === 't'){
	$time = $sto->getTime();
}else{
	$time = $sto->getDateTime();
}

include  './m4.html';
?>













