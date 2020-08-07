<?php
	include ('header.php');

?>

<main>
	<div class ="article">
    	   	<table>
    	   		   <thead>
            <tr>
                <th>Title</th>
                <th> Content</th>
                <th>Auteur Prenom</th>
                <th>Auteur Nom</th>
                <th>Date</th>
                <th>Categorie</th>
                <th>Actions</th>
            </tr>
    	   	<?php  foreach ($articles as $article) : ?>
			  
			  <article>
		
            <tbody>
               <tr>
			    <td><p><a href="detail.php?id=<?php echo $article['id']; ?>"><h2><?php echo $article['title']; ?>
			    </h2></a></p></td>
			    
			    <td><p> <?php echo htmlspecialchars (substr($article['content'] , 0, 30))?>[...]</p></td> 
			    <!-- substr raccourci la string en nombre de caractère voulu (50 caractères) -->
	   			<td>rédigé par <?php echo  htmlspecialchars($article['firstname']); ?></td>
			    <td><?php echo htmlspecialchars ($article['lastname']); ?></td>
			  	<td>le <?php echo $article['publication_date']; ?></td>
	    	 <td>Categorie <?php echo htmlspecialchars ($article['name']); ?></td> 
	    	 <td><a href="update.php?id=<?php echo $article['id']; ?>" >Modifier</a>
			    <a href="delete.php?id=<?php echo $article['id']; ?>" >Supprimer</a></td>
	    	</tr>
            </tbody>
           
		
		<?php endforeach ?>
		 </table></div>
	</main>
	
	</body>
</html>