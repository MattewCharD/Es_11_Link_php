<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link</title>
</head>
<body>
    
    <?php 
    // Stringa
    $linkBase="https://xkcd.com";
    // Numero Link
    $numLink=random_int(2,5);
    
    for ($i=1; $i <= $numLink ; $i++) { 
        
        echo "<a href='".$linkBase."/".$i."' target='_blank'>Pagina ".$i."</a> <br>";
        
    }
    ?>
   

</body>
</html>