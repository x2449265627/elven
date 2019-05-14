<?php 
cLass math{
  public function calSteps($n){
  	//台阶数量为1 或者 2 时候 直接返回当前值

  	if($n == 1){
  	   return 1;
  	}
  	if($n == 2){
  		return 2;
  	}
     //台阶数量大于1跟 2 返回前两项的和
  	return $this->calSteps($n-1)+$this->calSteps($n-2);
  }	
}
//青蛙跳 其实是一个菲比那切数列 
$math = new math();
$res = $math->calSteps(5);
echo $res;
 ?>