<?php
	include ('header.php');
	require('articledetail.php');

?>

<main>
    <div class="detail">
    
    	
    	
    	   <li><p> <?php echo $articles['content'] ?></p></li>
	   			<li>rédigé par <?php echo $articles['firstname']; ?></li>
			    <li><?php echo $articles['lastname']; ?></li>
			  	<li>le <?php echo $articles['publication_date']; ?></li>
	    	 <li>Categorie <?php echo $articles['name']; ?></li>
   
       
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
              <aside>
         <?php  foreach ($comments as $comment) : ?>
          <ul>
              <li>rédigé par <?php echo $comment['nickname']; ?></li>
              <li><p> <?php echo $comment['content'] ?></p></li>
         </ul>
          <?php endforeach ?>
      </aside>
</main>