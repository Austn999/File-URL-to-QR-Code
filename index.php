<?php
include('lib/dirlist.function.php');
?>

<head>
	<title>File URL to QR Code</title>
	<link rel="stylesheet" href="lib/materialize.min.css">
	<script src="lib/materialize.min.js"></script>
	<script src="lib/jquery.min.js"></script>
	<script src="lib/qrious.min.js"></script>
	<script src="lib/qrcode2window.js"></script>
</head>
<body>
<div class="container">
<?php
//must include ./ due to code your can change and fix to your liking on line 33 in dirlist.function.php which removes the first 2 characters
listDirectory("./serve")
?>
</div>
</body>