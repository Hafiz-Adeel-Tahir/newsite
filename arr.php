

<div class = "Container">
<?php 
	include "includes/header.php"
?>
	<h1> Array </h1>
	<?php
	
		$arr = array(1,2,3,4,5,6,7,8,9,10);


		$totl = count($arr);

		//echo $totl;


		for($cont=0; $cont < $totl; $cont++) {
			
			echo "<p>$arr[$cont]</p>";
			
		}
	?>
</div>
</html>