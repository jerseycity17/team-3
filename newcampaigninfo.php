<!DOCTYPE HTML>
<!--
	Identity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Enter New Campaign Inforamtion</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading">
		<?php include "db.php" ?>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
          <div width="300px">
					<section id="main">
						<header>
						<img src = "images/logo.png" width="50px" />
						<h1>Create A New Campaign</h1>
							<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
                  Name: <br>
                  <input type= "text" name= "name"> <br>
                  Charity: <br>
                  <input type= "text" name= "charity"> <br><br>
                  Description: <br>
                  <input type= "text" name= "description"> <br>
                  Campaign Hashtag: <br>
                  <input type= "text" name= "hashtag"> <br>
                  Time Frame <br>
                  End Date: <br>
                  <input type= "text" name= "endDate"> <br><br>
                  <?php 
            $name = isset ($_POST["name"]) ? $_POST["name"] :  "" ;
            $charity = isset ($_POST["charity"]) ? $_POST["charity"] : "" ;
            $descr = isset ($_POST["description"]) ? $_POST["description"] : "" ;
            $hashtag = isset ($_POST["hastag"]) ? $_POST["hashtag"] : "" ;
            $endDate = isset ($_POST["endDate"]) ? $_POST["endDate"] : "" ;
            $query = "INSERT INTO campaigndetail (`campaign_name`, `organization`, `campaign_info', 'campaign_hashtag', 'campaign_degree') VALUES ('$name', '$charity', '$descr', '$hashtag', 1)";

            mysqli_query($conn, $query); ?>
                  
              </form>
              <input id="submit_button" type="submit" value="Next" onclick= "window.location.href= 'newCampaignChallenges.php'">
						</header>
			</div>
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