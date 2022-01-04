<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/style.css?v=2865" />
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

	<div class="content">

        <h1>Register</h1>


        <?php 
            dc($_SERVER['REQUEST_METHOD']); 
            dc($errors); 
            dc($post) 
        ?>


        <form action="/register" method="post" novalidate>

            <fieldset>

                <legend>Register</legend>

            <p><label class="required" for="first">First name</label>
                <input type="text" name="first" value="<?=$post['first'] ?? ''?>" />
                <?=$errors['first'][0] ?? '' ?></p>

            <p><label class="required"  for="last">Last name</label>
                <input type="text" name="last" value="<?=$post['last'] ?? ''?>" />
            <?=$errors['last'][0] ?? '' ?></p>

            <p><label class="required"  for="age">Age</label>
                <input type="text" name="age" value="<?=$post['age'] ?? ''?>" />
            <?=$errors['age'][0] ?? '' ?></p>

            <p><label class="required"  for="email">Email</label>
                <input type="email" name="email" value="<?=$post['email'] ?? ''?>" />
            <?=$errors['email'][0] ?? '' ?></p>

            <p><label class="required"  for="postal_code">Postal Code</label>
                <input type="text" name="postal_code" value="<?=$post['postal_code'] ?? ''?>" />
            <?=$errors['postal_code'][0] ?? '' ?></p>

            <p><label class="required"  for="password">Password</label>
                <input type="password" name="password" />
            <?=$errors['password'][0] ?? '' ?></p>

            <p><label class="required"  for="password_confirm">Confirm Password</label>
                <input type="password" name="password_confirm" />
            <?=$errors['password_confirm'][0] ?? '' ?></p>

            <p><button type="submit">Submit</button></p>

            </fieldset>

        </form>

    </div><!-- /content -->


</div><!-- /.container -->

<div id="footer">

    <?php require __DIR__ . '/includes/footer_nav.php'?>

	<p>Content copyright by Big Book Site - all rights reserved.</p>

</div><!-- /footer -->
	
</body>
</html>


