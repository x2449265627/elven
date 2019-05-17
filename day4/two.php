<?php 

class people{
	public $name = '魏晓';
	private $sex;
	public function say(){
       echo $this->name;
	}
	public function love($sex){
	  $this->sex = $sex;
      if($this->sex == "男"){
      	echo "我要找女朋友";
      	die;
      }
      echo "我要找男朋友";

	}
}
$people = new people();
$people->say();
$people->love('男');

?>