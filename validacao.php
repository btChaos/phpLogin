<?php
  include('conexao.php');
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      header("Location: login.php"); 
      exit;
  }
  
  if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($con, $_POST['user']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);
			
			$query 		= mysqli_query($con, "SELECT * FROM users WHERE  sha1(password)='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location:home.php');
					
				}
			else
				{
					echo 'Login ou senha inválidos!';
				}
		}


?>
