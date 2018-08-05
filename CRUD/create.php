	<!DOCTYPE html>
	<html>
	<head>
		<title>Add new user</title>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

	</head>
	<body>
<form class="form" method="post" action="index.php" enctype="multipart/form-data">
	<div class="form-group">
		<label>User name: </label>
			<input type="text" name="username" class="form-control"> 
	</div>
		
	<div class="form-group">
		<label>Password: </label>
		<input type="password" name="password" class="form-control"> 
	</div>
	

	<div class="form-group">
		<label>Department: </label>
			<input type="text" name="department" class="form-control"> 
	</div>
		
	<div class="form-group">
		<label>Post your image</label>
		<input type="file" name="file" class="form-control-file">
	</div>	
	
		<div class="form-group">
		<button name="submit" value="submit" class="btn btn-primary">Submit</button>	 
	</div>
	
</form>
	
	</body>
	</html>
