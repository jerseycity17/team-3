<!DOCTYPE HTML>
<!--
	Identity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under tde CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Campaign Report</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body class="is-loading">
		<!-- Wrapper -->

			<div style = "width: 100%">
				<!-- Active challenges -->
				<section id="main">
						<h1>6 Degree Campaigns</h1>
			</div>
		<!-- Wrapper -->
			<div style = "float: left; padding: 20px; width: 100%">
			<div id="wrapper">
				<!-- Share -->
				<section id="main">
						<h1>Share Your Campaign!</h1>
            <p>Sharing your campaign on social media is the best way to get to the 6th Degree! Connect witd your friends to spread awareness, collect funds, and find volunteers!</p>
            <p>Click the platform to share your campaign on!</p>
            <a href="https://twitter.com/home?status=Check%20out%20my%206%20Degrees%20Campaign!%20Share,%20donate,%20and%20volunteer%20to%20help%20me%20reach%20the%206th%20Degree!%20#6DegreesRocks">
            <img src= "images/twitter.png" alt= "Twitter" width= "50" height="50">
            </a>
            <a href="https://instagram.com/home?status">
            <img src= "images/insta.png" alt= "Instagram" width= "50" height="50">
            </a>
            <a href="https://facebook.com">
            <img src= "images/fb.png" alt= "Facebook" width = "50" height="50">
            </a>
			</div>
		</div>
	<div id = "wrapper">
		<div style = "float: left; width: 100%; padding: 20px; z-index: 1">
				<!-- Campaign Information -->
				<section id="main">
						<h1>Campaign Information</h1>
						<table width = "100%" align = "center" style = "padding: 10px; border: 1px solid grey">
							<tr>
								<td><u>Name</u></td>
								<td><u>Charity    </u></td>
								<td><u>Description</u></td>
								<td><u>Hashtag</u></td>
                				<td><u>End Date</u></td>
							</tr>
							<tr>
								<td>Campaign 1</td>
								
				                <td>Code for Good in JC</td>
				                <td>#CfG</td>
								<td>Nov 1 @ 12:00PM</td>
							</tr>
			            </table>
						<br><br>
			            <table width = "100%" align = "center" style = "padding: 10px; border: 1px solid grey">
							<tr>
								<th><u>Challenge No.</u></th>
								<th><u>Challenge Type</u></th>
								<th><u>Info</u></th>
								<th><u>End Date</u></th>
							</tr>
							<tr>
								<td align="center">1</td>
								<td>Volunteer</td>
								<td>Volunteer at Code for Good for 2 hours</td>
								<td>Dec 2 @ 1:00PM</td>
							</tr>
							<tr>
								<td align="center">2</td>
								<td>Share</td>
								<td>Share 1 Post on Facebook or Twitter</td>
								<td>Dec 2 @ 1:00PM</td>
							</tr>
							<tr>
								<td align="center">3</td>
								<td>Other</td>
								<td>Sign a petition for more Code for Good events</td>
								<td>Dec 2 @ 1:00PM</td>
							</tr>
							<tr>
								<td align="center">4</td>
								<td>Donated</td>
								<td>Donate at least $5 to Code for Good</td>
								<td>Dec 2 @ 1:00PM</td>
							</tr>
							<tr>
								<td align="center">5</td>
								<td>Other</td>
								<td>Contact 10 people to promote Code for Good</td>
								<td>Dec 2 @ 1:00PM</td>
							</tr>
							<tr>
								<td align="center">6</td>
								<td>Other</td>
								<td>Post a photo of yourself at Code for Good</td>
								<td>Dec 2 @ 1:00PM</td>
						</table>
			</div>
		</div>
	<div id = "wrapper">
		<div style = "float: left; width: 600px; height: 600px; padding: 20px; z-index: 1">
				<!-- Campaign Information -->
				<section id="main">
				
						<h1>Campaign Impact</h1>
						<p>Donation Total: $5</p>
						<!--
							SELECT quantity 
							FROM UserChallengeStat
							WHERE campaign_id = 'campaign_id'
							GROUP BY campaign_id;
						-->
						<p>Maximum Degree Reached: 2</p>
						<!--
							SELECT max(degree) 
							FROM UserCampaignStat
							WHERE campaign_id = 'campaign_id'
						-->
						<p>People Reached: 10</p>
						<!--
							SELECT COUNT (*)
							FROM UserCampaignStat
							WHERE campaign_id = 'campaign_id'
						-->
						<p>Number of Shares: 17</p>
						<!--
							SELECT COUNT (*)
							FROM UserChallengeStat
							WHERE campaign_id = 'campaign_id'
							AND challenge_type = 'challenge_type'
							AND status = "complete"
						-->
						<p>Hours Volunteered: 10</p>
			</div>
	</html>
		<!-- Scripts -->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>
	</body>
</html>
