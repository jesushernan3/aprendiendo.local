<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="with=device-with, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="../css/main.css">

		<title>
		<?php 
	if (isset($titulo_pagina)) {
		echo $titulo_pagina;
	} else {
		echo "Pagina sin titulo";
	}
	?>		
		</title>
	</head>
	<body>
	<?php include 'partials/header.php'; ?>
