<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    // D E E L  1 //
    $dieren = array("hond","kat","koe","hagedis", "giraf", "zebra");
    $aantal_dieren = count($dieren);
    $gezocht_dier = "koe";
    
    echo $aantal_dieren . "<br />";
    
    if (in_array($gezocht_dier, $dieren)) {
        
        echo "het dier is gevonden in de lijst" . "<br />";    
    } else {
        
        echo "het dier is niet gevonden in de lijst" . "<br />";
    }
    
    // D E E L  2 // 
    $dieren_ = array("hond","kat","koe","hagedis", "giraf", "zebra");
    $extra_dieren = array("eekhoorn", "zeehond", "kip");
    $sorted_dieren = sort($dieren_);
    $dieren_count = count($dieren_);
   
    for ($i =0; $i < $dieren_count ; $i++) {
        
        echo $dieren_[$i] . ", ";
    }
    
    $dierenlijst = array_merge($dieren_ , $extra_dieren);
    echo "<br />";
    print_r($dierenlijst);
    
    // D E E L  3 // 
    
    $numbers = array(8,7,8,7,3,2,1,2,4);
    $unieke_numbers = array_unique($numbers);
    $sorted_array = rsort($unieke_numbers);
  
    echo "<br />";
    echo var_dump($numbers);
    ?>
</body>
</html>