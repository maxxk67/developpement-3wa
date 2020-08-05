<?php
	include ('header.php');
?>
		<main>
			<div class ="article">
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
	</div>	</main>
	
	</body>
</html>
