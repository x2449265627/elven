<?php



class Math{
	public function countstr($str=''){
		if($str == ''){
			return false;
			die;
		}
		$strtoarr =  str_split($str);
  	 // var_dump($strtoarr);
		foreach ($strtoarr as $key => $value) {
			if(isset($arr[$value])){
				$arr[$value]++;
			}else{
				$arr[$value] = 1;
			}
			if($arr[$value] >= 3 ){
				return $value;
			}
			
		}
	}
}
$str = 'Have you ever gone shopping and';
$math = new Math();
$res = $math->countstr($str);
echo $res;

?>