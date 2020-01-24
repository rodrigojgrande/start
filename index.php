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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

		<!-- Popper -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

		<!-- Bootstrap -->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<!-- Meus -->
	<script type="text/javascript">
		$('.dropdown-toggle').dropdown()
	</script>

</body>
</html>