<!DOCTYPE html>
<html>
<head>
	<title>MÉTODO DE COSTEO PEPS</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">

	<script src="librerias/jquery-3.6.0.min.js"></script>
	<script src="librerias/bootstrap/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
	<div class="container">
	<div id="tabla"></div>
	</div>

</body>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('elementos/table.php');
	});
</script>
</html>
