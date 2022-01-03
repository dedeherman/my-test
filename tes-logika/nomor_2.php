<?php
$text = strtolower("Berikut adalah kisah sang gajah. Sang gajah memiliki teman serigala bernama DoeSang. Gajah sering dibela oleh serigala ketika harimau mendekati gajah.");
		$contains_elephant = "sang gajah";
		$contains_wolf = "serigala";
		$contains_tiger = "harimau";
		$lastPos = 0;
		$positions = array();
	
		$output = array();
		
		while(($lastPos = strpos($text, $contains_elephant, $lastPos))!== false):
			$positions[] = $lastPos;
			$lastPos = $lastPos + strlen($contains_elephant);
			$output[] = $contains_elephant;
		endwhile;
		while(($lastPos = strpos($text, $contains_wolf, $lastPos))!== false):
			$positions[] = $lastPos;
			$lastPos = $lastPos + strlen($contains_wolf);
			$output[] = $contains_wolf;
		endwhile;
		while(($lastPos = strpos($text, $contains_tiger, $lastPos))!== false):
			$positions[] = $lastPos;
			$lastPos = $lastPos + strlen($contains_tiger);
			$output[] = $contains_tiger;
		endwhile;

		for($i = 0; $i < count($output); $i++):
			if($i == 0):
				echo $output[$i];
			else:
				echo " - ".$output[$i];
			endif;
		endfor;
    ?>