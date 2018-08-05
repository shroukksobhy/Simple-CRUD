<?php

try{
 $db= new PDO ('mysql:host=localhost;dbname=test','root','');
}

catch(PDOException $e){
	echo "Wrong in db";
}

?>