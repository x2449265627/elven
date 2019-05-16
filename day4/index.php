<?php 

class Math{
	public function calFn($n,$m){
		if($m<$n){
			return false;
		}
		$count = 0;
		$n_len = strlen($n);
		$m_len = strlen($m);
		for($i=$n;$i<=$m;$i++){
			$len = strlen($i); 
			if($len == 1){
				if($i%pow(10, $len) == 1){
					$count++; 
					continue; 
				}		

			}
			for ($j=$len; $j >=1 ; $j--) { 
				if($j == 2){
					if($i/10 == 1){
						$count++;

					}
				}
				if($i%pow(10, $j) == 1){
					$count++; 
					continue; 
				}	
			}
        

		}
		     echo $count;
	}
}

		$math = new Math();
		$math->calFn(1,13);
?>