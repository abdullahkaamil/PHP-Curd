<?php 

$db = new Mysqli;

$db->connect('localhost','root','','curd');

if(!$db){

	echo "success";
}



 ?>