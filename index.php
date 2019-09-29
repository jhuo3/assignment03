<!doctype html>
<html land="en">

	<head>
		<meta charset="utf-8">
		<title>Team Havana | Assignment 3: Information Architecture</title>
		<link rel="stylesheet" href ="css/styles.css">
	</head>

	<body class = "container">

		<header>
			<h1 class="homeh1" style = "font-size: 1.2em; left: -65px; font-size: 42px;" > We are DMS</h1>
		</header>

		<section class="section">
			<h2>Topics of Similarity</h2>
			<p>The aforementioned students are all declared Digital Media Studies Majors, and all go about discussing their early lives, interests, and why it is that they are a DMS major.</p>
		</section>


		<!-- Possibility of adding aside -->
<?php include "inc/main-nav.inc"; ?>

		<section>
			<h2>Home</h2>
		</section>


		<!-- Possibility of adding aside -->


		<main>

			<!--  <a href="alex.php">
				<h1 class="homeh1" style = "font-size: 1.2em; left: -65px; font-size: 42px;" > Welcome to our page!</h1>
			</a> -->

				<section>
					<img src = "images/alex.jpg", alt="Alex" class="image">
						<a href="/alex.jpg">
							<!-- <div class="text">Alex's interests</div> -->
						</a>
				</section>


				<section  class="list">
											<!-- Section could be the menu in the first page for each
											student & the content on other pages
												-->
							<ul>
								<li><a href="earlier-life.php#alex-life">Alex's earlier life</a></li>
								<li><a href="interests.php#alex-interests">Alex's interests</a></li>
								<li><a href="why-dms.php#alex-dms">Alex in DMS</a></li>
							</ul>

				</section>

				<section>
					<img src = "images/jennifer.jpg", alt="Jennifer" class="image">
						<a href="/jennifer.jpg">
							<!-- <div class="text">Jennifer's interests</div> -->
						</a>
				</section>

				<section  class="list">
						<ul>
							<li><a href="earlier-life.php#jennifer-life">Jennifer's Earlier Life</a></li>
							<li><a href="interests.php#jennifer-interests">Jennifer's Interests</a></li>
							<li><a href="why-dms.php#jennifer-dms">Jennifer in DMS</a></li>
						</ul>

				</section>

				<section>
					<img src = "images/maria.jpg", alt="Jennifer" class="image">
						<a href="/maria.jpg">
							<!-- <div class="text">Jennifer's interests</div> -->
						</a>
				</section>

				<section class="list">
						<ul>
							<li><a href="earlier-life.php#maria-life">Maria's Earlier Life</a></li>
							<li><a href="interests.php#maria-interests">Maria's Interests</a></li>
							<li><a href="why-dms.php#maria-dms">Maria in DMS</a></li>
						</ul>
				</section>

		</main>


		<footer>CSC174: Advanced Front-End Web Design and Development</footer>

	</body>

</html>
