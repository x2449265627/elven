
<?php 

class math{
	public function FindNumsAppearOnce($array){
		$arr = [];
		$res = array_count_values($array);
        foreach ($res as $k => $v) {
        	if($v == 1){
        		$arr[] = $k;
        	}
        }
		// foreach ($array as $k => $v) {
		// 	if(in_array($v,$arr)){
		// 		unset($arr[$v]);
		// 		continue;
		// 	}
		// 	$arr[$v] = $v;
		// }
		return $arr;
	}
}

$math = new math();
$array = [2,4,3,6,3,2,5,5,5];
$res = $math->FindNumsAppearOnce($array);
var_dump($res);
 ?>