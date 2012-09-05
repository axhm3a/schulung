<?php
class Auto {
	function __construct() {
	}
	
	public function brumBrum(){
		echo "fährt";
	}
	
	public function __autoload() {
		var_dump("hello");
	}
	
	public function var_dump() {
		
	}
}

?>