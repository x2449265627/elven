<?php 
class math{
   public function ReverseSentence($str){
       $arr = explode(' ',$str);
       $count = count($arr)-1;
       for($i=$count;$i>=0;$i--){
       	echo $arr[$i].' ';
       }
   }
}
$str = "student. a am I";
$math = new math();
$math->ReverseSentence($str);
 ?>