<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Books you might like...</title>
	<link rel="stylesheet" type="text/css" href="css/style.css?v=1097" />
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

			<form action="/?p=books" method="get" autocomplete="off" novalidate>
				<input id="s" type="text" name="s" maxlength="255" />&nbsp;
				<input type="submit" value="search" />
				<div>
					<ul id="live_search"></ul>
				</div>
			</form>


		</div><!-- /.search -->

		<hr class="clear" />

<div class="content">

<h1>Books you might like...</h1>


	<div class="categories">

		<h3>Categories</h3>

		<ul>
						<li><a href="/?p=books">
				Drama				</a></li>
						<li><a href="/?p=books">
				Horror				</a></li>
						<li><a href="/?p=books">
				Legal				</a></li>
						<li><a href="/?p=books">
				Literature				</a></li>
						<li><a href="/?p=books">
				Politics				</a></li>
						<li><a href="/?p=books">
				SF				</a></li>
					</ul>

	</div> 

	<div class="shelf">

	<?php foreach($books as $row) : ?>
		
		<div class="book">

			<div class="img">
				<img src="images/covers/<?=e($row['image'])?>" alt="<?=e($row['title'])?>" />
			</div>
			<div class="details">
				<p><strong><?=e($row['title'])?></strong><br />
					by <a href="/?p=books"><?=e($row['author'])?></a><br />
					<span><?=e($row['genre'])?></span>, <?=e($row['num_pages'])?> pages, <?=e($row['year_published'])?>, $<?=e($row['price'])?></p>
					<p>
					<?=e($row['description'])?>
					<p><a class="more" href="/?p=book_detail">More info</a>
			</div>

		</div><!-- /.book -->

	<?php endforeach; ?>
	
	</div><!-- /.shelf -->

</div><!-- /content -->

</div><!-- /.container -->

<div id="footer">

	<p><a href="index.php">Home</a> | 
		<a href="/?p=books">Books</a> | 
		<a href="about.php">About</a> | 
		<a href="contact.php">Contact</a>

	<p>Content copyright by Big Book Site - all rights reserved.</p>

</div><!-- /footer -->

</body>
</html>


