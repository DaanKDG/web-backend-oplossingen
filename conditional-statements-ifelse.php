<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    $jaartal = 1600;
    
    if ($jaartal % 4 == 0 && $jaartal % 100 !== 0 || $jaartal % 400 == 0) {
        
        echo "wel schrikkeljaar";
    } else {
        
        echo "geen schrikkeljaar";
    }
    
    ?>
</body>
</html>