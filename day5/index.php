<?php

class Math{
	public static $num;
	public function GetUglyNumber_Solution($index){
       
         if($index == 1){
         	echo '是';
         	die;
         }
         if($index % 2 == 0){
         	$index = $index/2;
         	$this->GetUglyNumber_Solution($index);
         	die;
         }
         if($index % 3 == 0){
         	$index = $index/3;
         	$this->GetUglyNumber_Solution($index);
         	die;
         }
         if($index % 5 == 0){
         	$index = $index/5;
         	$this->GetUglyNumber_Solution($index);
         	die;
         }
         echo '不是';
	}
}

$math = new Math();
$res = $math->GetUglyNumber_Solution(7);
echo $res;
?>