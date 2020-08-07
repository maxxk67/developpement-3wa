<?php
	include ('header.php');

?>

<main><div class ="article">
    <form action="requpdate.php?" method="post">
        <fieldset>
            <legend>Editer article</legend>
               <div>
        <label for="title">Titre</label>
        <input type="text" id="title" name="title" value="<?php echo htmlspecialchars ($articles['title']) ?>">
    </div>
    
    <div>
        <label for="content">Texte :</label>
        <textarea id="content" name="content" ><?php echo htmlspecialchars ($articles['content']) ?></textarea>
    </div>
    	<label for="category"> Categorie </label>
	<select name="category" id="category">
	<?php foreach ($category as $categorys) : ?>
	<option value="<?php echo $categorys['id']; ?>"><?php echo $categorys['name']; ?></option>
	
	<?php endforeach ?> 
    </select>
    
    <label for="author"> Auteur </label>
	<select name="author" id="author">
	<?php foreach ($author as $authors) : ?>
	<option value="<?php echo $authors['id']; ?>"><?php echo $authors['firstname']; ?></option>
   	<?php endforeach ?>   
   </select>
          <input type="submit" value="Modifier">
          <input id="Id" name="Id" type="hidden" value="<?php echo $id; ?>">
        </fieldset>
    </form>
</div></main>
	
	
	</body>
    </html>