
<?php
require'config.php';


if(isset($_GET['action'])&& $_GET['action']=='edit'){
	$id=intval($_GET['id']);
	$edit=$db->query("select * from users where id='$id'");

	while ($row=$edit->fetch(PDO::FETCH_OBJ)) {
		# code...
		echo"<form action='index.php' method='POST'>
		Username:<input type='text' name='username' value='$row->username' class='form-control'/><br>
		Password:<input type='password' name='password' value='$row->password'/><br>
		<input type='submit' name='update' value='update'/>
		 </form>";
		}

		 if(isset($_POST['update'])){
		 	$id=intval($_GET['id']);
		 	$username=$_POST['username'];
		 	$password=$_POST['password'];
		 	$sql="update users(username,password) set (:username,:password) where id='$id'";
		 	$query=$db->prepare($sql);
		 	$query->execute(array(':id'=>$id,':username'=>$username,':password'=>$password));
		 }
}
?>