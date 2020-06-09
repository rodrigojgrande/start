<?php
$caminhoArquivos = "./";
$titlepage = "";
$description = '<meta charset="utf-8" name="description" content="">';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Charset -->
	<meta charset="utf-8">

	<!-- Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Description -->
	<?php if(isset($description)){ echo $description; }?>

	<!-- Author -->
	<meta name="author" content="Rodrigo José Grande">

	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/555bcd85d4.js" crossorigin="anonymous"></script>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- My CSS -->
	<link rel="stylesheet" href="_css/style.css" type="text/css">

	<!-- Icon -->
	<link rel="icon" href="_ico/favicon.ico">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=gotham-bold&display=swap" rel="stylesheet">

	<!-- Title -->
	<title> <?php if(isset($titlepage)){ echo $titlepage; }else{ echo ""; } ?></title>

	<style type="text/css">

	</style>
</head>

<body>
	<header>
		
	</header>

	<main>
		
	</main>
	

	<footer>
		
	</footer>


		<!-- JQuery -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

		<!-- Popper -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

		<!-- Bootstrap -->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


	<!-- Meus -->
	<script type="text/javascript">
		$('.dropdown-toggle').dropdown()
	</script>

</body>
</html>