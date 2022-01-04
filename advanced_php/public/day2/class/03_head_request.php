<!DOCTYPE html>
<html>
<head>
	<title>Head Request</title>
	<script>

		var xhr = new XMLHttpRequest();

		// HEAD requests are for information about the type of
		// headers a resource would return... nothing else
		xhr.open('HEAD', 'server_01.php');

		xhr.onreadystatechange = function() {
			if(this.readyState == 4 && this.status == 200) {
				console.log(this.response);
				console.log(this.getAllResponseHeaders());
			}
		}

		xhr.send();



	</script>
</head>
<body>

	<h1>HEAD request example</h1>

	<p>See console for output</p>

</body>
</html>