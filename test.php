<?php

	function cetakBintang($star){

		for($a = $star; $a > 0; $a--){
			for($b = $star;$b >= $a; $b--){
				echo "*";
			}
			echo "<br>";
		}

	}

	function tambah($first,$second,$sum){

		$num = 0;  
		$n1 = $first;  
		$n2 = $second; 
		$count = $sum-2;  
		echo "\n";  
		echo $n1.' '.$n2.' ';
		while ($num < $count )  
		{  
		    $n3 = $n2 + $n1;  
		    echo $n3.' ';  
		    $n1 = $n2;  
		    $n2 = $n3;  
		    $num = $num + 1;  
		}

	}

	echo cetakBintang(3);
	echo "<br>";
	echo cetakBintang(5);
	echo "<br>";
	echo tambah(5,7,4);
	echo "<br>";
	echo tambah(1,1,5);
	echo "<br>";
	echo tambah(4,5,5);

	
?>
