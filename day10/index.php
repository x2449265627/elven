<?php 
class math{
	public function Find($target, $array){
		$count_o = count($array);
		if($target < $array[0][0]){
			return false;
		}
		$count_t = count($array[$count_o-1]);
		if($target > $array[$count_o-1][$count_t-1]){	
			return false;
		}
		foreach ($array as $k => $v) {
			  foreach ($v as $key => $value) {
			  	  if($value == $target){
			  	  	return true;
			  	  }
			  }
		}
	}


}
$target =  7;
$array=[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
$math = new math();
$res = $math->Find($target, $array);
var_dump($res);
?>