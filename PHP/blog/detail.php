<?php
	include ('header.php');
	require('articledetail.php');

?>

<main>
    <div class="detail">
    
    	
    	    <ul>
    	   <li><p> <?php echo htmlspecialchars ($articles['content']) ?></p></li>
	   			<li><p>rédigé par <?php echo htmlspecialchars($articles['firstname']); ?></li>
			    <li><?php echo htmlspecialchars ($articles['lastname']); ?></p></li>
			  	<li>le <?php echo  $articles['publication_date']; ?></li>
	    	 <li>Categorie <?php echo htmlspecialchars( $articles['name']); ?></li>
           </ul>
       
      </div>
    
      
    <div class ="comments">
       <form method="post" action="comments.php">
            <fieldset>
                <legend>Nouveau commentaire</legend>
                  <div>
            
                <label for="nickName">Pseudo :</label>
                <input type="text" id="nickName" name="nickName">
            </div>
            <div>
                <label class="textarea" for="contents">Commentaire :</label>
                <textarea id="contents" name="contents" rows="5"></textarea>
            </div>
                <input id="Id" name="Id" type="hidden" value="<?php echo $id; ?>">
            <div>
                <button class="send" type="submit">Ajouter</button>
                <a class="cancel" href= 'index.php';>
                    Annuler</a>
            
            </div>
        </fieldset>
        </form>
           </div>
              <div class="acomment">
         <?php  foreach ($comments as $comment) : ?>
          <ul>
              <li>rédigé par <?php echo htmlspecialchars ($comment['nickname']); ?></li>
              <li><p> <?php echo htmlspecialchars ($comment['content']) ?></p></li>
         
          <?php endforeach ?>
          </ul>
      </div>
</main>