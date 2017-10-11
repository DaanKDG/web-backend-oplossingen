<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $counter = 0;
    $max_value = 100;
    
    while ($counter <= 100) {
        
        
        
        if ($counter != 100) {
            
            echo $counter . ", ";
        } else {
            
            echo $counter;
        }
        
        $counter++;
        
    }
    	$boodschappenlijst	= array( "appelen", "aardappelen", "sigaretten", "koffie", "worstenbroodjes" );
    
    ?>
    		
		

		<ul>
			<?php 
				$counter_ = 0;
			?>
			<?php while($counter_ < count($boodschappenlijst) ):  ?>
				
				<li><?= $boodschappenlijst[$counter_] ?></li>
				

				<?php $counter_++ ?>
			<?php endwhile ?>
		</ul>
</body>
</html>