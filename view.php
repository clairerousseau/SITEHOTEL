<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/d685d0f540.js"></script>

</head>
<body>
	<header>
		<nav>
			<a href="view.php"><li>ACCUEIL</li></a>
			<a href="chambres.php"><li>NOS CHAMBRES</li></a>
			<a href="view.php"><li>CONTACT</li></a>

			<a href="#close"><li><i class="fa fa-times fa-2x" id="close" aria-hidden="true"></i></li></a>
		</nav>		


	</header>
	<main>

		<section id="image">
			<a href="#menuFixe"><i class="fa fa-bars fa-2x" id="menuFixe" aria-hidden="true"></i></a>
		 	<a href="#clique" id="clique">clique</a>
		</section>



		<section id="photos">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</section>
	</main>
	<footer></footer>


<script>
	 $( "header" ).hide()

	$( "#menuFixe" ).click(function() {
  $( "header" ).slideDown(1000);
});

		$( "#close" ).click(function() {
  $( "header" ).slideUp(1000);
});

</script>

</body>
</html>