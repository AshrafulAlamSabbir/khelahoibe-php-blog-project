<?php 

$db= mysqli_connect('localhost', 'root', '', 'phpblogproject');

if($db){
	// echo 'database connected';

}else{
	die('database connection error'.mysqli_error($db));
}

?>