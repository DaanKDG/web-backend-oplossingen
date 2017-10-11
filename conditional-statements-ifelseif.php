<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    $getal = 25;
    
    if ($getal > 0 && $getal <= 10) {
        
        echo "het getal ligt tussen 0 en 10";
        
     } 
    elseif ($getal > 10 && $getal <= 20) {
        
        echo "het getal ligt tussen 10 en 20";
        
     } 
    elseif ($getal > 20 && $getal <= 30) {
        
        echo "het getal ligt tussen 20 en 30";
        
        }
    // enzovoort tot en met 100 //
    
    ?>
</body>
</html>