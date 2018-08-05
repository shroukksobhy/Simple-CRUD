<?php

require 'config.php' ;
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Show data
	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="bootstrap-css.css"
</head>
<body>
<table border="5">
	<tr>
		<th>ID</th>
		<th>USER NAME</th>
		<th>PASSWORD</th>
		<th>Department</th>
		<th>IMAGE</th>
		<th>Delete</th>
		<th>Edit</th>
		<th>Read</th>
	</tr>
	<tr>
	<?php

	$sql="select * from users";
	$query=$db->prepare($sql);
	$query->execute();
	$result=$query->fetchall();
	foreach ($result as $row) {
		echo"<tr>";
		echo"<td>"  . $row['id']. "</td>";
		echo "<td>" . $row['username'] . "</td>";
		echo "<td>" . $row['password'] . "</td>";
		echo "<td>" . $row['department'] ."</td<>";

				  
   		   echo '<td><img src="'.'imgs/'.$row['file'].'" alt="HTML5 Icon" style="width:128px;height:128px"> </td>';
   		   echo"<td><a href='index.php?action=delete&id={$row['id']}' class='btn btn-danger'>Delete</a></td>";
   		   echo "<td><a href='edit.php?action=edit&id={$row['id']}' class='btn btn-primary'>Edit</a></td>";

   		   echo"<td><a href='read.php?action=read&id={$row['id']}'class='btn btn-info'>Read</a></td>";

   		     echo"</tr>";

	}

		if(isset($_GET['action'])&& $_GET['action']=='delete'){
		$id=intval($_GET['id']);
		$delete=$db->query("delete from users where id='$id'");
		$delete->execute();
		}
		
	?>
	</tr>
</table>
</body>
</html>
