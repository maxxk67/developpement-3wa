<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lotte</title>
</head>
<body>
    <h1><?= $title ?></h1>
    <ul>
        <?php foreach($rule as $rule) : ?>
            <li><?= $rule ?></li>
        <?php endforeach ?>    
    </ul>
        
    
</body>
</html>