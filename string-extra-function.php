<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    function first_fruit() {
    
    $fruit = "kokosnoot";
    echo "aantal karakters: " . strlen($fruit) . "<br />";
    $findme = "o";
    $space = "\n";
    
    $str_pos = strpos($fruit, $findme);
    echo "positie van 'o' in 'kokosnoot': " . $str_pos . "<br />";
        
    }
    //  D E E L  2 //
    function second_fruit() {
        
   
    $_fruit = "ananas";
    $_findme = "a";
    
    $_strpos = strripos($_fruit, $_findme);
     
    echo "positie laatste a in 'ananas': " . $_strpos . "<br />";
    echo "ananas in hoofdletters:" . strtoupper($_fruit);
    echo "<br />";    
    }
    
    function third_fruit() {
        
       $lettertje = "e";
       $cijfertje = 3;
       $langsteWoord = "zandzeepsodemineralenwatersteenstralen";
        
        for ($i = 0; $i < strlen($langsteWoord); $i++) {
            
            if ($langsteWoord[$i] == $lettertje) {
                
                $langsteWoord[$i] = $cijfertje;
            
            }
            
        }
        
        echo $langsteWoord;
    }
   
    
    // D E E L 3 //
    
    first_fruit();
    second_fruit();
    third_fruit();
    ?>
    

</body>
</html>