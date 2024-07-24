<html>
	
	<h1> Functions </h1>

	<?php
		//functions

		function fun(){
			echo 'This is echo under the function scope';
		}

		// calling the function
		fun();

		echo '<hr/>';

		//$Product_num=0;
		function product($num1, $num2){
			$pro = $num1 * $num2;
			echo "The Product of two numbers in a function is:  $pro";
		}

		

		product(5, 7);
	?>

</hmtl>