<!--Un formulaire permettra à tante Ursule d'ajouter de nouvelles tâches. Ce formulaire devra permettre de renseigner les informations suivantes :

    le titre de la tâche
    la description détaillée de la tâche 
    la date butoir (deadline) avant laquelle la tâche doit être terminée 
    la priorité de la tâche (son importance) : basse, normale ou haute -->
<?php
    require('read.php');
?>
    
    
<!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
        <title>Document</title>
    </head>
    <body>
        <form method="post" action="taches.php">
    		<fieldset> 
        		<legend>Titre</legend>
        		<label for="title"> Titre de la tâche.</label>
        		<input type="text" required id="title" name="title"/>
            </fieldset>
            <textarea  name="tache" rows="5" cols="33" placeholder="description"></textarea>
            <label for="date">Date de fin de tache</label>
    
        <input type="date" required id="date" name="date">
        
           <select name="choix">
                <option value="faible" selected> faible</option> 
                <option value="importante"> importante</option>
                <option value="haute">Haute</option>
            </select>
        
            <input type="submit" value="Envoyer">
        </form>
         <form action="deleteall.php" method="POST">
            <button>Effacer toutes les taches</button>
        </form>
       
    
    <?php  if(!empty($data)) : ?>
    
    <?php foreach($data as $index => $todo) : ?>
        <form method="POST" action="deleteone.php">
            <ul>
                <li>
                    <input type="checkbox" name="tache" class="line">
                    <input type="hidden" name="taskId" class="line" value="<?= $index ?>">
                </li>
                <button type="submit">Effacer</button>
                
                <?php foreach($todo as $index => $line) : ?>
                    
                    <li><?= $line ?></li>
                        
                <?php endforeach ?>
            </ul>
            
      </form>
      
    <?php endforeach ?>
    
    <?php endif ?>
    
    
    
    
    </body>
    </html>