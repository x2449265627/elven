<?php 
class math{
	public function Add($num1, $num2)  {
			
		if($num2 == 0){
			echo $num1;
		
			die;
		}

		$a =  $num1^$num2;
		$b =  ($num1&$num2) << 1;
	
	    $this->Add($a,$b);
	

	}
}
$math  = new math();
$res = $math->Add(10,8);
var_dump($res);
?>