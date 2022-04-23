<?php
namespace Project\Controllers;
use \Core\Controller;

class NumController extends Controller{
	public function sum($params){
		//var_dump($params);
		$n1 = $params["n1"];
		$n2 = $params["n2"];
		$n3 = $params["n3"];
		echo $n1+$n2+$n3;
	}
}

?>