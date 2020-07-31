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
			</nav>
			<h1>BLOG</h1>
		</header>
		<!--MAIN CONTENT-->
		<main>
			<h2>Inserer un nouvel article</h2>
			<form method="post" action="form.php">
	<fieldset>
		 <legend>Nouvel article</legend>
	<div>
    <label for="title">Nom :</label>
    <input type="text" id="title" name="title" required />
    </div>
    <div>
	<label for="text">Article</label>
	<textarea id="text" name="article"></textarea>
  	</div>
  	<div>
    <label for="author">auteur :</label>
    <select name="author" id="author">
    <option value="">--Please choose an option--</option>
    <option ></option>
     <option ></option>
     </select></div>
  
   
     <input type="submit" value="Envoyer">
  </fieldset>
			</form>
		</main>
	
	</body>
</html>
