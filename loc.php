<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body  style="url('pal.jpg');">
	<div class="header">
		<h2>Share</h2>
	</div>
	
	<form method="post" action="loc.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>name</label>
			<input type="text" name="name" value="<?php echo $name; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Address</label>
		 <textarea name="address" rows="5" cols="55" value="<?php echo $address; ?>"></textarea>
		</div>

		<div class="input-group">
			<button type="submit" class="btn" name="loc_user">share</button>
		</div>
		<!--<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>-->
	</form>
</body>
</html>