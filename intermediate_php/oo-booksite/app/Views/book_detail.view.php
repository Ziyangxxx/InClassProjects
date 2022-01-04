<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Book Details</title>
	<link rel="stylesheet" type="text/css" href="css/style.css?v=6430" />
</head>
<body>

<div id="header">

	<nav>
		<img id="logo" src="images/logo.jpg" alt="logo" />
		<?php require __DIR__ . '/includes/topnav.inc.php'; ?>

	</nav>

</div><!-- /#header -->

<div class="container">

	<div class="header_img">
		<img src="images/header.jpg" alt="header" />
	</div>
		<div class="search">

			<form action="books" method="get" autocomplete="off" novalidate>
				<input id="s" type="text" name="s" maxlength="255" />&nbsp;
				<input type="submit" value="search" />
				<div>
					<ul id="live_search"></ul>
				</div>
			</form>


		</div><!-- /.search -->

		<hr class="clear" />

<div class="content">

<h1>Book Details</h1>


	<div class="categories">

		<h3>Categories</h3>

		<ul>
						<li><a href="books">
				Drama				</a></li>
						<li><a href="books">
				Horror				</a></li>
						<li><a href="books">
				Legal				</a></li>
						<li><a href="books">
				Literature				</a></li>
						<li><a href="books">
				Politics				</a></li>
						<li><a href="books">
				SF				</a></li>
					</ul>

	</div> 

	<div class="shelf">

		<div class="book_cover">

			<img src="images/covers/under_the_dome.jpg" alt="Under the Dome" />

		</div><!-- /.book_cover -->

		<div class="book_details">

			<h3>Under the Dome</h3>

			<ul>
				<li><strong>Title</strong>: Under the Dome</li>
				<li><strong>Author</strong>: Stephen King</li>
				<li><strong>Genre</strong>: Horror</li>
				<li><strong>Format</strong>: Trade Paper</li>
				<li><strong>Number of Pages</strong>: 1200</li>
				<li><strong>Year Published</strong>: 2010</li>
				<li><strong>In Print</strong>: no</li>
				<li><strong>Price</strong>: $17.99</li>
				<li><strong>Publisher</strong>: Ballantine Books</li>
				<li><strong>Publisher City</strong>: New York</li>
				<li><form action="cart.php" method="post">
					<input type="hidden" name="book_id" value="4" />
					<button type="submit">Add to Cart</button>
				</form></li>
			</ul>

		</div><!-- /.book_details -->

		<div class="book_author">

			<h4>Meet the author...</h4>

			<h5>Stephen King</h5>

			<img src="images/authors/stephen_king.jpg" alt="Stephen King" />

			<p>Stephen King.  Country: USA</p>

			<img src="images/countries/usa.jpg" alt="usa Flag" />

			<p>View <a href="books">other books by this author</a>.</p>

		</div><!-- /.book_author -->

		<div class="book_description">
						<h4>Description</h4>

			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

		</div>

		<div class="book_publisher">

			<h3>Other books by this publisher</h3>

						<div class="book_item">
				<a href="book_detail"><img src="images/covers/dune.jpg" alt="Dune" /></a>
			</div>
					<div class="book_item">
				<a href="book_detail"><img src="images/covers/under_the_dome.jpg" alt="Under the Dome" /></a>
			</div>
					<div class="book_item">
				<a href="book_detail"><img src="images/covers/carrie.jpg" alt="Carrie" /></a>
			</div>
		
		</div>

		

	</div><!-- /.shelf -->

</div><!-- /content -->

</div><!-- /.container -->

<div id="footer">

    <?php require __DIR__ . '/includes/footer_nav.php'?>

	<p>Content copyright by Big Book Site - all rights reserved.</p>

	</div><!-- /footer -->

</body>
</html>
