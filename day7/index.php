
<?php 	

class Db{
	private static $db;
	private $yy = '22';
	private function __construct(){
        new PDO("mysql:dbname=dianshang;host=127.0.0.1",'root','root');

	}



	public static function getDb(){
		$res = $this->yy;
		var_dump($res);
        if (!(self::$db instanceof Db)) {
        	// echo 1;die;
            self::$db = new Db();
        }
       
        return self::$db;
	}





	private function __clone(){

	}

}

 
$res = Db::getDB();
var_dump($res);
?>