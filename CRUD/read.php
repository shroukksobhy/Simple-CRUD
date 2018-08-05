<?php
require'config.php';


if(isset($_GET['action'])&& $_GET['action']=='read'){
	$id=intval($_GET['id']);
	$read=$db->query("select * from users where id='$id'");
	while ($row=$read->fetch(PDO::FETCH_OBJ)) {
		# code...
		echo"<table border='5'>
	<tr>
		<th>ID</th>
		<th>USER NAME</th>
		<th>PASSWORD</th>
		<th>Department</th>
		<th>IMAGE</th>
		
	</tr><tr>";

	$sql="select * from users where id='$id'";
	$query=$db->prepare($sql);
	$query->execute();
	$result=$query->fetchall();
	foreach ($result as $row) {
		echo"<tr>";
		echo"<td>".$row['id']."</td>";
		echo "<td>" . $row['username'] . "</td>";
		echo "<td>" . $row['password'] . "</td>";
		echo "<td>" . $row['department'] ."</td<>";
	
				  
   		   echo '<td><img src="'.'imgs/'.$row['file'].'" alt="HTML5 Icon" style="width:128px;height:128px"> </td>';
}
}
}
?>