<?php
$count_loop = array();
echo 'N = 13';
echo '<br>';
echo 'Output: ';
		for($i = 1; $i <= 100; $i++): 
			if($i % 3 == 0 || $i % 7 == 0):
				$count_loop [] = $i;
				$a = $i;
				if($i % 3 == 0 && $i % 7 == 0):
					$a = '<b>Z</b>';
				endif;
				echo $a;
				echo ', ';
			endif;
			if(count($count_loop) == 13):
				break;
			endif;
		endfor;
		?>