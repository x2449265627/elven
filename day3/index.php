<?php 	

class Math{
	public function getstr($arr = []){
		$arrlen = count($arr);
		for($i=0;$i<$arrlen;$i++){
			if($arr[$i]%2 == 0){
				$arr1[] = $arr[$i];
			}else{
				$arr2[] = $arr[$i];
			}
			
			
		}
		$arr3 =array_merge($arr2,$arr1);
		var_dump($arr3);
	}
}
$arr = [1,2,3,4,5,6];
$math = new Math();
$res =  $math->getstr($arr);
?>