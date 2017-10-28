<!DOCTYPE HTML>
<!--
	Identity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body class="is-loading">
        
    <?php
    include "db.php";

    $usernameError = $passwordError = $username = $password = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($_POST['username']) && !empty($_POST['password'])) {
            $sql1 = "Select username from userinfo where username='$username' and password='$password'";
            $mysqli_result1 = mysqli_query($conn,$sql1);
            if(mysqli_num_rows($mysqli_result1) == 1) {
                session_start();
                $_SESSION['username'] = $username;
                $conn->close();
                header("Location:dashboard.php");
            }

            else {
                echo "<br><font color='red'>Invalid username or password!</font>";
            }
        }
    }
?>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
						<img src = "images/logo.png" width="50px" />
						<h1>Log in</h1>
							<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
								<div class="row">
									<label for="username">Username:</label><br />
									<input id="username" class="input" name="username" type="text" value="" size="30" /><br />
								</div>
								<div class="row">
									<label for="password">Password:</label><br />
									<input id="password" class="input" name="password" type="password" value="" size="30" /><br />
								</div>
								<input id="submit_button" type="submit" value="Log in" />
							</form>					
							<p style = "font-size: 10px"><a href = "./createaccount.html">Create Account</a> | 
							<a href = "./forgot.html">Forgot your password?</a></p>
						</header>
			</div>

		<!-- Scripts -->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>

	</body>
</html>