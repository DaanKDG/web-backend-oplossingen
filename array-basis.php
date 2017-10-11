<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    
    // D E E L  1 //
    $dieren = array("aap","hond", "kat", "buffel", "koe","olifant", "vlieg","leeuw","vogel");
    
    $dier[] = "leeuw";
    $dier[] = "aap";    
    $dier[] = "mier";
    $dier[] = "ekster";   
    $dier[] = "eend";
    $dier[] = "kat";    
    $dier[] = "giraf";
    $dier[] = "luipaard";    
    $dier[] = "paard";
    $dier[] = "ezel";
    
    $voertuig["landvoertuigen"] = array ("brommer" , "fiets");
    $voertuig["luchtvoertuigen"] = array ("vliegtuig", "ballon", "parachute");
    $voertuig["watervoertuigen"] = array ("boot", "roerboot", "kajak");
    
    echo var_dump($voertuig) . "<br />" . "<br />";
    
    // D E E L  2 //
    $getallen = array(1,2,3,4,5);
    $aantal_items = count($getallen);
    $new_sum = 0;
    
    echo "de vermenigvuldiging: " . array_product($getallen). "<br />";
    echo "alle oneven items zijn: " . "<br />";
    
    for ($i =0; $i < $aantal_items; $i++) {
        
        if ($getallen[$i] % 2 !== 0) {
            
            echo $getallen[$i] . "<br />";
        }
    }
    
    $getallen_ = array(5,4,3,2,1);
    
    for ($i =0; $i < $aantal_items; $i++) {
        
        $new_sum = $getallen[$i] + $getallen_[$i];
        echo "de som van key " . $i . " is gelijk aan = " . $new_sum . "<br />";
        
    }
   
    
    ?>
</body>
</html>