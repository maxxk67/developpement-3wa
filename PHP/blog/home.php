<!DOCTYPE html>
<html>
	<head>
		<title>TITRE DU PROJET</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- CSS Vendor -->
	
		<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />

		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	</head>
	<body>
		<!--HEADER-->
		<header>
			<nav>
			<a href ="request.php">ajouter article</a>
			<a href ="#">panneau adminstration</a>
			</nav>
			</header>
			<main>
			   	<?php  foreach ($articles as $article) : ?>
			    <ul>
			         <li><?php echo $article['title']; ?></li>
			         <li><?php echo $article['content']; ?></li>
			         <li><?php echo $article['publication_date']; ?></li>
			         <li><?php echo $article['firstname']; ?></li>
			         <li><?php echo $article['lastname']; ?></li>
			         <li><?php echo $article['name']; ?></li>
                </ul>
	<?php endforeach ?>
			</main>
</body>
</html>