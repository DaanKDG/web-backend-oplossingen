<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    // D E E L  1 // 
    $days = array("","maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag");
    $getal = 0;
    
    if ($getal == 1) {
        
        echo $days[$getal];
    }
    if ($getal == 2) {
        
        echo $days[$getal];
    }    
    if ($getal == 3) {
        
        echo $days[$getal];
    }    
    if ($getal == 4) {
        
        echo $days[$getal];
    }    
    if ($getal == 5) {
        
        echo $days[$getal];
    }    
    if ($getal == 6) {
        
        echo $days[$getal];
    }    
    if ($getal == 7) {
        
        echo $days[$getal];
    }
    // D E E L  2 //
    
     $days = array("","maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag");
    $getal = 1;
    
    if ($getal == 1) {
        
        $dag = strtoupper($days[$getal]);
        $laatste_a = strrpos($dag, 'A');
        $dag = substr_replace($dag, 'a', $laatste_a, 1);
        
        echo $dag;
        }
    
    ?>
</body>
</html>