<?php 

if (isset($_POST['calculate'])) {
	# code...
	$degree = $_POST['degree'];
	$result = ($degree * 1.8) + 32;
	// add
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Convertor | Index</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<div class="convert">
		<h4 class="text-center mb-5">Convert Degrees To Ferhanhite</h4>
	</div>
	<form action="" method="post" >
		<input type="number" name="degree" placeholder="Degree">
		<input type="number" name="fr" placeholder="<?php echo $result ?>" readonly="readonly" >
		<input type="submit" name="calculate" name="calculate" value="calculate" class="btn calculate" onclick="calculate()">
	</form>

</body>
</html>
