<?php 
	session_start();

	// variable declaration
	$name="";
	$address="";
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

        if (isset($_POST['loc_user'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$address= mysqli_real_escape_string($db, $_POST['address']);
		//$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "name is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($address)) { array_push($errors, "Password is required"); }

		//if ($password_1 != $password_2) {
		//	array_push($errors, "The two passwords do not match");
		//}

		// register user if there are no errors in the form
		
			//$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO location(name, email, address) 
					  VALUES('$name', '$email', '$address')";

			mysqli_query($db, $query);
			echo query;

			//$_SESSION['username'] = $username;
			//$_SESSION['success'] = "You are now logged in";
			header('location: continue.php');
		

	}
//user getting location
	if (isset($_POST['clean'])) {
					$query = "SELECT * FROM location" ;
				if($results = mysqli_query($db, $query));
					//if ($is_query_run = mysql_query($query)) 
{ 
    // echo "Query Executed"; 
    // loop will iterate until all data is fetched 
    while ($query_executed = mysqli_fetch_assoc ($results)) 
    { 
        // these four line is for four column 
        echo $query_executed['id'].' '; 
        echo $query_executed['name'].' '; 
        echo $query_executed['email'].' '; 
        echo $query_executed['address'].'<br>'; 
    } 
} 


    				





	}
?>