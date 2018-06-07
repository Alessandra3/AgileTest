<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>

		<title>Helios by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->


	</head>
	<body class="homepage">
			<!-- Header -->
				<div id="header">
						<div class="inner">
							<form method="post" action="mailto:raizen@mail.utexas.edu?subject=Vocabulary Quiz 1" enctype="text/plain">

								<P><?php echo $question_item['text']; ?><BR>
								<input type="radio" name="1.How often do you release a software version to the costumer?" value="1-2 weeks">1-2 weeks<BR>
								<input type="radio" name="1.How often do you release a software version to the costumer?" value="2-3 weeks">2-3 weeks<BR>
								<input type="radio" name="1.How often do you release a software version to the costumer?" value="3-4 weeks">3-4 weeks<BR>
								<input type="radio" name="1.How often do you release a software version to the costumer?" value="more than 4w">more than 4w<BR>
								</p>

								<br>
								<br>
								<br>
								<br>
								<input type="submit" value="Send Form">
								<input type="reset" value="Clear Form">
							</form>
						</div>

						<nav id="nav">
							<ul>
								<li><a href="index.html">Small Releases</a></li>
							</ul>
							<br>
						</nav>
				</div>
	</body>
</html>