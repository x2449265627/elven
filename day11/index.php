<?php 

class math{
	public function Combine($arr_A, $arr_B) {
		$newArr =[];

		$i =0;
		$j = 0;
		$count_a = count($arr_A);

		$count_b = count($arr_B);
		$count_c = ($count_a + $count_b) -1;
		for($k=0;$k<=$count_c;$k++){
			if($arr_A[$i] <= $arr_B[$j]){
				echo $i;
				if($i >= $count_a - 1){
					echo $j;
					$newArr[$k] = $arr_B[$j];
					$j++;

					break;
				}
				$newArr[$k] = $arr_A[$i];
				
					$i++;

		

			}else{
				echo $j;

				$newArr[$k] = $arr_B[$j];
				$j++;
			}
		}
		echo "<pre>";
		var_dump($newArr);
	}

}

$math =  new math();
$arr_A=[1,3,6,9];
$arr_B=[2,4,5,8,20];
$res = $math->Combine($arr_A, $arr_B);

?>