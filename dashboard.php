<!DOCTYPE HTML>
<!--
	Identity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Dashboard</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body class="is-loading">
		<!-- Wrapper -->


		
			<div style = "width: 100%">
				<!-- Active challenges -->
				<section id="main">
						<h1>Dashboard</h1>
		</div>
		<!-- Wrapper -->
		
			<div style = "float: left; width: 700px">
			<div id="wrapper">
				<!-- Active challenges -->
				<section id="main">
						<h1>Active challenges</h1>
						<table width = "500px" align = "center" style = "padding: 20px; border: 1px solid grey">
							<tr>
								<td><u>Campaign Name</u></td>
								<td><u>Challenge Number</u></td>
								<td><u>Expiration</u></td>
                                <td></td>
							</tr>
							<?php
								include "db.php";
								session_start();
								$username = $_SESSION["username"];
       							 $query = 'SELECT distinct campaigndetail.campaign_name, challengestatus.challenge_id, campaigndetail.expiration FROM campaigndetail, challengestatus'; /* user specific query to be added*/ 
       							 $results = mysqli_query($conn, $query); ?>
        						<?php while ($row = mysqli_fetch_array($results, MYSQLI_NUM )): ?>
        						<tr>
        							<td><?php echo $row[0]; ?></td>
        							<td><?php echo $row[1]; ?></td>
        							<td><?php echo $row[2]; ?></td>
        						</tr>
        					<?php endwhile; ?>
							
						</table>

			</div>
		</div>
		
			<div style = "float: right; width: 650px; padding-right: 50px">
			<div id="wrapper" style = "padding: 20px" position = "fixed">
				<!-- invites -->
				<section id="main">
						<h1>Invites</h1>
						<table width = "450px" align = "center" style = "padding: 20px; border: 1px solid grey">
							<tr>
								<td><u>Name</u></td>
								<td><u>Campaign</u></td>
								<td><u></u></td>
							</tr>
							<tr>
								<td>Kate</td>
								<td>Campaign 7</td>
								<td><input id="submit_button" type="submit" value="Accept" /></td>
							</tr>
							<tr>
								<td>Ali</td>
								<td>Campaign 8</td>
								<td><input id="submit_button" type="submit" value="Accept" /></td>
							</tr>
						</table>
			</div>
		</div>
			<div style = "float: right; width: 650px; padding-right: 50px">
			<div id="wrapper">
				<!-- invites -->
				<section id="main">
					<p style = "font-size: 40px; position:fixed" ><a href = "./newcampaigninfo.php" >+</a></p>
						<h1>Campaigns</h1>
						<table width = "450px" style = "padding: 20px; border: 1px solid grey">
							<tr>
								<td><u>Campaign</u></td>
								<td><u>Organization</u></td>
								<td><u></u></td>
							</tr>
							<?php
								include "db.php";
       							 $query = 'SELECT campaigndetail.campaign_name, campaigndetail.organization FROM campaigndetail';
       							 $results = mysqli_query($conn, $query); ?>
        						<?php while ($row = mysqli_fetch_array($results, MYSQLI_NUM )): ?>
        						<tr>
        							<td><a href="./campaignreport.php"><?php echo $row[0]; ?></a></td>
        							<td><?php echo $row[1]; ?></td>
        						</tr>
        					<?php endwhile; ?>
						</table>
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