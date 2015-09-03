<!DOCTYPE html>
	<html>
	<head>
		<title>FSM Amazing Race!</title>
		<link rel="stylesheet" href="style.css">
		<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
	</head>

	<body>

		<div id="instafeed"></div>
		<script type="text/javascript" src="/inc/instafeed.min.js"></script>
		<script type="text/javascript">
			var feed = new InstaFeed({
				get: 'tagged',
				tagName: 'real30daychallenge',
				clientId: 'db98366d5aa54cab9d4d0c9da71ed4ab',
				sortBy: 'most-recent',
				resolution: 'standard_resolution',
				useHttp: true,
				target: 'instafeed'
			});
			feed.run();
		</script>

	</body>
	</html>