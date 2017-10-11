<?php

	$text =	file_get_contents( 'text-file.txt' );


	$textChars = str_split( $text );

	rsort( $textChars);


	$textCharsReversed = array_reverse( $textChars );

	$counter = array();

	foreach($textCharsReversed as $waarde)
	{
		if ( isset ( $counter[$waarde] ) )
		{
			++$counter[$waarde];
		}
		else
		{
			$counter[$waarde] = 1;
		}
		
	}
    print_r($counter);
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Document</title>
	</head>
	<body>

	</body>
</html>