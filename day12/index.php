<?php 

class math{

	public function NumberOf1($n){
		$i=0;
		while ($n >=1) {
	
			if($n%2 == 1){
                $i++;
			}
			$n = floor($n/2);
		}
	      echo $i;
	}
}
$math = new math();
$res = $math->NumberOf1(4);
?>