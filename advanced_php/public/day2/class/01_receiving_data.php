<?php

$title = 'Receiving Data with Ajax';

?><!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
	<script>

		var xhr = new XMLHttpRequest();

		xhr.open('GET', 'server_01.php');

		xhr.responseType = 'json';

		xhr.onreadystatechange = function() {
			if(this.readyState == 4 && this.status == 200) {
				console.log(this.response);
			}
		}

		xhr.send(null)

	</script>
</head>
<body>

	<h1><?=$title?></h1>

	<div id="output">
		
		<p>See console for output.</p>

	</div>

</body>
</html>