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
	<script src="https://kit.fontawesome.com/555bcd85d4.js"></script>

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
	<h1>Hello, world!</h1>
	</header>

	<main>
		
	</main>
	

	<footer>
		
	</footer>


	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CKeditor -->
	<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>

	<!-- Meus -->
	<script type="text/javascript">
		$('.dropdown-toggle').dropdown()
	</script>

</body>
</html>