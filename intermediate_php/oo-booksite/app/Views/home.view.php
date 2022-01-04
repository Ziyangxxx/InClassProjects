<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css?v=7245" />
</head>
<body>

<div id="header">

<nav>
	<img id="logo" src="images/logo.jpg" alt="logo" />
	<?php require __DIR__ . '/includes/topnav.inc.php'; ?>

</nav>

</div><!-- /#header -->

<div class="container">

	<div class="hero">

		<a href="books"><img src="images/slides/book_club.jpg" alt="book_club.jpg" /></a>

	</div><!-- /.hero -->

	<div class="content">

	<div class="featured">

		<div class="item">
			<img src="images/covers/caves_of_steel.jpg" alt="Sale on SF" />
			<div class="caption">
				Sale on SF until Friday!  24% off!&nbsp;
				<a href="books">More...</a>
			</div>
		</div><!-- /.item -->

		<div class="item">

			<img src="images/authors/michael_connelly.jpg" alt="Meet the author" />
			<div class="caption">
				Michael Connelly here!  Sept 30.&nbsp;
				<a href="books">More...</a>
			</div>

		</div><!-- /.item -->

		<div class="item">

			<img src="images/covers/black_box.jpg" alt="Black Echo" />
			<div class="caption">
				Join our Mystery bookclub!&nbsp;
				<a href="books">More...</a>
			</div>

		</div><!-- /.item -->

		<div class="item">

			<img src="images/authors/mark_twain.jpg" alt="Mark Twain" />
			<div class="caption">
				It's never too late to enjoy a classic!&nbsp;
				<a href="books">More...</a>
			</div>

		</div><!-- /.item -->

		<div class="item">

			<img src="images/covers/under_the_dome.jpg" alt="Black Echo" />
			<div class="caption">
				Stephen Kings mega bestseller.  25% off!&nbsp;
				<a href="books">More...</a>
			</div>

		</div><!-- /.item -->

	</div><!-- /.featured -->

	<div class="authors">

		<h3>Our Top Selling Authors</h3>

		<div class="item">

			<a href="authors.php"><img src="images/authors/michael_connelly.jpg" alt="Michael Connelly" /></a>

		</div><!-- /.item -->

		<div class="item">

			<a href="authors.php"><img src="images/authors/john_lescroart.jpg" alt="John Lescroart" /></a>

		</div><!-- /.item -->

		<div class="item">

			<a href="authors.php"><img src="images/authors/robert_sawyer.jpg" alt="Robert Sawyer" /></a>

		</div><!-- /.item -->

		<div class="item">

			<a href="authors.php"><img src="images/authors/stephen_king.jpg" alt="Stephen King" /></a>

		</div><!-- /.item -->

	</div><!-- /.authors -->	

	</div><!-- /content -->

</div><!-- /.container -->

<div id="footer">

    <?php require __DIR__ . '/includes/footer_nav.php'?>

	<p>Content copyright by Big Book Site - all rights reserved.</p>

</div><!-- /footer -->

</body>
</html>
