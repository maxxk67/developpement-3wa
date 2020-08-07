<?php
	include ('header.php');
?>
			
			<main>
				<div class="article">
			   	<?php  foreach ($articles as $article) : ?>
			  
			  <article><ul>
			  
			    <li><p><a href="detail.php?id=<?php echo $article['id']; ?>"><h2><?php echo $article['title']; ?>
			    </h2></a></p></li>
			    
			    <li><p> <?php echo htmlspecialchars (substr($article['content'] , 0, 49))?>[...]</p></li> 
			    <!-- substr raccourci la string en nombre de caractère voulu (50 caractères) -->
	   			<li>rédigé par <?php echo  htmlspecialchars($article['firstname']); ?></li>
			    <li><?php echo htmlspecialchars ($article['lastname']); ?></li
			  	<li>le <?php echo $article['publication_date']; ?></li>
	    	<!-- <li>Categorie <?php echo htmlspecialchars ($article['name']); ?></li> -->
            
            </article></ul>
		
		<?php endforeach ?>
		</div>
	</main>
	</body>
	</html>