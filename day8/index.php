<?php 
class Math{
	public static $sum;
	public function Sum_Solution($n){
        self::$sum += $n;
		$n &&  $n + $this->Sum_Solution($n-1);
	}


}
$math = new Math();
$math->Sum_Solution(5);
echo $math::$sum;

?>