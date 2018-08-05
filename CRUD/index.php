<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Simple CRUD
	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css.css"
</head>
<body>

<div>
	<a href="create.php" class="btn btn-primary">Add new user</a>
</div>
<div>
<?php
require'show.php';
?>
</div>

</body>
</html>

<?php
if (isset($_POST['submit'])) {
	# code...
	$username=$_POST['username'];
	$password=$_POST['password'];
	$department=$_POST['department'];
/*
	$filename=$_FILES['file']['name'];
	$filetmp=$_FILES['file']['tmp_name'];
	move_uploaded_file($filetmp,"imgs/".$filename); */


	$folder = "imgs/";
	$filename=$_FILES['file']['name'];
	$filetmp=$_FILES['file']['tmp_name'];
	$path=$folder.$filename;

	move_uploaded_file($filetmp,$path);

	$sql="insert into users(username,password,department,file) values(:username,:password,:department,:file)";
	$query=$db->prepare($sql);
	$query->execute(array(':username'=>$username,'password'=>$password,'department'=>$department,':file'=>$filename));
}
?>