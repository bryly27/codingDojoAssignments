<?php  
	session_start();
	require('connection.php');

	if (isset($_POST['action'])&& $_POST['action']=='register') 
	{
		register_user($_POST);
	}

	if (isset($_POST['action'])&& $_POST['action']=='login') 
	{
		login_user($_POST);
	}

	else 
	{
		session_destroy();
		header('location: index.php');
		die();
	}

	function register_user($post)
	{
		$_SESSION['errors']=array();

		if(empty($post['first_name']))
		{
			$_SESSION['errors'][] = "First name can't be blank!";
		}

		if(empty($post['last_name']))
		{
			$_SESSION['errors'][] = "Last name can't be blank!";
		}

		if(empty($post['password']))
		{
			$_SESSION['errors'][] = "Password is required!";
		}

		if($post['password'] !== $post['confirm_password'])
		{
			$_SESSION['errors'][] = "Passwords must match!";
		}

		if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL))
		{
			$_SESSION['errors'][] = "Please use a valid email address!";
		}

		//------------------end of validation------------------------
		
		if(count($_SESSION['errors'])>0) 
		{
			echo "You didn't validate correctly!";
		}
		else 
		{
			$query = "INSERT INTO users (first_name, last_name, password, email, created_at, 		updated_at) VALUES ('{$post['first_name']}', '{$post['last_name']}', '{$post['password']}', '{$post['email']}', NOW(), NOW())";
			run_mysql_query($query);
			header('location: index.php');
			die();
		}
	
	}

	function login_user($post)
	{
		$query = "SELECT * FROM users WHERE users.email = '{$post['email']}' AND users.password = '{$post['password']}'";
		$user= fetch_record($query);

		if(count($user)>0)
		{
			$_SESSION['user_id'] = $user['id'];
			$_SESSION['name']=$user['first_name'];
			header('location: success.php');
			die();
		}
		else
		{
			$_SESSION['errors'][] = "Please fix";
			header('location: index.php');
			die();
		}
	}


?>