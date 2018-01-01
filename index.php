<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Meet Up Times</title>
		<meta content="Free online application for scheduleing, and planning events. Use Meet Up Times to plan your next event! " name="description">
		<meta content="event planner planning schedule" name="keywords">
		<meta content="index,follow" name="robots">
		<script type="text/javascript" src="jquery/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="jquery/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
		<link rel="stylesheet" href="jquery/jquery-ui-1.12.1.custom/jquery-ui.css">
		<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/index.css" rel="stylesheet">
		<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
		<script>
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] ||
				function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

			ga('create', 'UA-102434470-1', 'auto');
			ga('send', 'pageview');

		</script>
	</head>
	<body>
		<div class="container">
			<header>
				<div class="header row">
					<div class="titles col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<span class="title_start">meetup</span><span class="title_end">times.com</span>
					</div>
					<div class="header_actions col-xs-12 col-sm-8 col-md-8 col-lg-8">
						<div class="header_actions_row row">
							<div class="find_event col-xs-12 col-sm-9 col-md-10 col-lg-10">
								<!--uncomment to add fnd section
								<form action="viewSchedule.php" method="get">
								<span class="find_text">Find Event</span>
								<input class="find_input" type="text" placeholder="Event ID" name="id">
								<button type="submit" class="btn btn-primary">Find</button>
								</form> -->
							</div>
							<div class="new_schedule col-xs-12 col-sm-3 col-md-2 col-lg-2">
								<a class="btn btn-success" href="addEvent.php">New</a>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div class="main">
				<div class="title_image_block row">
					<img class="title_image col-xs-12 col-sm-12 col-md-12 col-lg-12" src="images/title-sunset.gif" alt="People Meeting">
				</div>
				<div class="row introduction">
					<div class="article col-xs-12 col-sm-6 col-md-8 col-lg-8">
						<h2>Making meeting easy</h2>
						<p>
							Meet Up Times was inspired by two brothers who wanted a professional and functional way to meetup with co-workers,
							classmates, group members and friends.  After trying several similar services found on the web,
							the brothers realized that a professional and functional way of meeting up with others had not
							yet been developed and decided to take matters into their own hands.
							Meet Up Times is free to use and offers users stylistic professionalism as well as a great resource to facilitate meetups.
						</p>
					</div>
					<div class="image_container col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<img class="images" src="images/people-woman-coffee-meeting.jpeg" alt="empty_meeting" />
					</div>
				</div>
				<div class="row">
					<div class=" big_btn_block col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<a href="addEvent.php" class="btn btn-success btn-lg btn-block">Make a New Event Now</a>
					</div>
				</div>
				<div class="row second">
					<div class="image_container col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<img class="images" src="images/phone.jpeg" alt="coffee meeting" />
					</div>
					<div class="article col-xs-12 col-sm-6 col-md-8 col-lg-8">
						<h2>Focused on mobile development</h2>
						<p>
							Other services, similar to Meet Up Times weren’t built for mobile use and have many problems for mobile phone users.
							Meet Up Times is unique because it was built with mobile phone users in mind, whether you use an android, iphone,
							tablet or computer you will get a fantastic product built specifically to run well on your device.
						</p>
					</div>

				</div>
				<div class="row third">
					<div class="article col-xs-12 col-sm-6 col-md-8 col-lg-8">
						<h2>Find the Ideal Time</h2>
						<p>
							The biggest setback to any meeting, gathering, or reunion is coordination.   Meet Up Times eliminates the pains of coordinating conflicting schedules by providing you with the optimal tool to get instant feedback on when everyone in your group has time to meet up.  Click “Make a New Event Now” to get start and stop worrying about when to meet!
						</p>
					</div>
					<div class="image_container col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<img class="images" src="images/people-meeting.jpeg" alt="people meeting" />
					</div>
				</div>
			</div>
			<footer></footer>
		</div>
	</body>
</html>