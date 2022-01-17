<?php
	
	$result = function (int $index){

        $tab = [0, 1];
        $nb = 0;

        for ($i=0; $i <= $index; $i++) {

            if($i < 2){

                if ($i === 0) {
                    $nb = 0;
					//var_dump('0', $tab);
					//echo '</br>';
                }else{
                    $nb = 1;
					var_dump('1', $tab);
					echo '</br>';
                }                
            }else{

				$nb = $tab[0] + $tab[1];
				var_dump('a', $tab);
				echo '</br>';

            	array_push($tab, $nb);
				var_dump('b', $tab);
				echo '</br>';

            	array_shift($tab);
				var_dump('c', $tab);
				echo '</br>';
			}                        
    	}
		
		return $nb;
	};

	$a = $result(2);

	//var_dump($a);

    
?>