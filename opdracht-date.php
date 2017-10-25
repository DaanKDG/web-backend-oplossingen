

<?php 

	$timestamp	=	mktime(22, 35, 25, 01, 21, 1904);

	$datum	=	date('d F Y, g:i:s A', $timestamp);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>opdracht date</title>
</head>
<body>
    
    <h1>Oplossing date</h1>

    <p><?= $datum ?></p>
    
</body>
</html>

