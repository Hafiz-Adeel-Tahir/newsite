<html>

	<?php

		//While Loop
		echo '<h1> While </h1>';
		//pre fix variable 
		$good = 0;

		while($good <= 10){
			echo "<p>This is While loop $good times</p>";
			$good++;
		}

		echo 'Exit While';

		//Do While Loop
		echo '<h1>Do While</h1>';
		//post fix variable 
		$good = 0;
		do{
			echo 'It is Do While    '. $good .'   <br>';
			$good++;
		}
		while($good <= 20);
		
		echo 'Exit Do While';

	?>

</html