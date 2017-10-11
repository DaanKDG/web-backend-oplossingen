<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <style>
    
       .groen {
           
          background: green;
          font-weight: bold;
          color: white;
       }
       .black {
           
           color: black;
           font-weight: bold;
       }
    
    </style>
   <?php 
    
    $rijen = 10;
    $kolommen = 10;
    ?>
    <table>
         
     <?php for ($i= 0; $i < $rijen; $i++):?> 
        <tr>
          <?php for ($a= 1; $a <= $kolommen; $a++):?>  
            <td class="<?= (($i * $a) %2 !== 0) ? 'groen' : 'black' ?> ">
            <?= $i * $a ?></td>
           <?php endfor?> 
        </tr>
        <?php endfor?>
        
    </table>

</body>
</html>