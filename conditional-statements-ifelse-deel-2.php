<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    $aantal_seconden = 221108521;
    
    $maand_len = 31;
    $week_len = 7;
    $minuut_len = 60;
    $uur_len = 3600;
    $jaar_len = 365;
    $volledige_dag = 24;

    echo "het aantal seconden zijn: " . $aantal_seconden . "<br />" . "<br />";
    $aantal_uren = floor($aantal_seconden / $uur_len);
    echo "het aantal uren: " . $aantal_uren . "<br />";
    
    $aantal_dagen = floor($aantal_uren / $volledige_dag);
    echo "het aantal dagen: " . $aantal_dagen . "<br />";
    
    $aantal_weken = floor($aantal_dagen / $week_len);
    echo "het aantal weken: " . $aantal_weken . "<br />";
    
    $aantal_maanden = floor($aantal_dagen / $maand_len);
    echo "het aantal maanden: " . $aantal_maanden . "<br />";
    
    $aantal_jaren = floor($aantal_dagen / $jaar_len);
    echo "het aantal jaren: " . $aantal_jaren . "<br />";
    ?>
</body>
</html>