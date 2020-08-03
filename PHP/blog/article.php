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
				<a href ="#">panneau adminstration</a>
				<a href ="display.php">Accueil</a>
			</nav>
			<h1>BLOG</h1>
		</header>
		<!--MAIN CONTENT-->
		<main>
			<h2>Inserer un nouvel article</h2>
			<form method="post" action="addarticle.php">
	<fieldset>
		 <legend>Nouvel article</legend>
	<div>
    <label for="title">Titre :</label>
    <input type="text" id="title" name="title" required />
    </div>
    <div>
	<label for="text">Article</label>
	<textarea id="text" name="article"></textarea>
  	</div>
  	<div>
     
	<label for="author"> Auteur </label>
	<select name="author" id="author">
	<?php foreach ($author as $authors) : ?>
	<option value="<?php echo $authors['id']; ?>"><?php echo $authors['firstname']; ?></option>
   	<?php endforeach ?>   
   </select>

	
	<label for="category"> Categorie </label>
	<select name="category" id="category">
	<?php foreach ($category as $categorys) : ?>
	<option value="<?php echo $categorys['id']; ?>"><?php echo $categorys['name']; ?></option>
	
	<?php endforeach ?> 
    </select>
  
   
     <input type="submit" value="Envoyer">
  </fieldset>
			</form>
		</main>
	
	</body>
</html>
