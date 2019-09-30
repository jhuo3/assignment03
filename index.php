<?php
$currentPage = "Home | Assignment 3: Information Architecture";
include "inc/html-top.inc";
?>

<?php include "inc/main-nav.inc"; ?>

		<section>
			<h2>Home</h2>
		</section>

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
						<p>This is Alex Chase and he is a Junior double majoring in Digital Media Studies and Political Science at the University of Rochester.</p>	

				</section>

				<section>
					<img src = "images/jennifer.jpg", alt="Jennifer" class="image">
						<a href="/jennifer.jpg">
							<!-- <div class="text">Jennifer's interests</div> -->
						</a>
				</section>

				<section  class="list">
						<p>This is Jennifer Ngene and she is a Junior majoring in Digital Media Studies. She has shared her very interesting childhood experiences.</p>	

				</section>

				<section>
					<img src = "images/maria.jpg", alt="Jennifer" class="image">
						<a href="/maria.jpg">
							<!-- <div class="text">Jennifer's interests</div> -->
						</a>
				</section>

				<section class="list">
						<p>This is Maria  Mancheno and she is a Senior majoring in Digital Media Studies and minoring in Mathematics. She has shared her high school life and variety of hobbies.</p>	
				</section>

		</main>

<?php include "inc/footer.inc"; ?>
