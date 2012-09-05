<?php
/*
$a = array('john',4=>'peter',4=>h'angela');

var_dump($a);
*/


//var_dump(range(3.0,5.0,0.17));
//$c = "1,2,3,4,5,6,7,8,9";

//var_dump(1,2,setlocale(LC_ALL, "nl_NL","de_DE","deu_deu"));
//var_dump(lcfirst("Apfel"));
//var_dump(md5_file($_SERVER["SCRIPT_FILENAME"],true));

//var_dump(nl_langinfo(MON_1));

//var_dump(number_format(2356.565,2))

// var_dump(ord("çe"));
// var_dump(chr(195));

// parse_str( "test[]=hallo&test[]=welt",$arr );
// var_dump($test,$test2,$arr);
//var_dump( print "defd");

//var_dump(printf("%d", (int)"17.999"));
//var_dump((int)(float)"17.999",(int)(float)"17,999");

//echo quoted_printable_encode ("Hallo Welt 345 +*%öä");

//echo similar_text("tot", "ot",$p);
//var_dump($p);

//var_dump(sscanf("SN/2350001SN/0815", "SN/%dSN/%d"));

//var_dump(sscanf("SN/2350001KN:1311", "SN/%dKN:%d",$arr1));

//var_dump($arr1);

//$i = '"Hallo","Zitat:\"HalloWelt\"\n"ss","dd"';

//var_dump(str_getcsv($i,",","\""));

// $search = array("Hallo");

// $replace = array("Mama","Rita");

// $subject = array("Hallo Rita", "Hallo Welt, Hallo Welt");

// var_dump(str_replace($search, $replace, $subject));

//var_dump(str_shuffle("abcdéfghijkl"));


//var_dump(str_word_count("the 1st winner's letter wins the iron-shovel !",2,"1"));

//var_dump(strchr("a,b,c",",",true));

//var_dump(strspn("abczdczdefgac", "czd"));

//$var = strcspn("42 ist die Antwort, was auf die 128. Frage?", "1234567890");

//var_dump($var);

// $arr = array(1,2,3,4,5,6,7,8,9,10);

// function test(&$arr){
// 	foreach($arr as $c) {
// 		reset($arr);
// 		if($c ==5)
// 		array_pop($arr);
// 	}
// }
// test($arr);
// var_dump($arr);

//$arr = array(7,"7s");
//var_dump(array_product($arr));

//var_dump(array_rand(array(),1));



// echo "<pre>";
// $arr = array(1,2,3,4,5);
// var_dump(array_reduce(&$arr, function($a,$b){
	
// 	var_dump($a);
// 	var_dump($b);
	
// 	//return $a * $b;
// },1));

// var_dump($arr);
// function test(){
// }
// var_dump(test());


// $base = array('citrus' => array("orange") , 'berries' => array("blackberry", "raspberry"), 'others' => 'banana' );
// $replacements = array('citrus' => 'pineapple', 'berries' => array('blueberry'), 'others' => array('litchis'));
// $replacements2 = array('berries' => array('blueberry'), 'others' => 'litchis');

// $basket = array_replace_recursive($base, $replacements, $replacements2);
// //print_r($basket);
// var_dump($basket);

//  class cr {
//  	private $priv_member;
//  	function cr($val)
//  	{
//  		$this->priv_member = $val;
//  	}
 
//  	function comp_func_cr($a, $b)
//  	{
//  		var_dump($a->priv_member);
//  		if ($a->priv_member === $b->priv_member) return 0;
//  		return 	1;//($a->priv_member > $b->priv_member)? 1:-1;
//  	}
//  }
 
//  $a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1=> new cr(4), 2 => new cr(-15),);
//  $b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1=> new cr(4), 2 => new cr(-15),);
 
//  $result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
//  var_dump($result);

//  $cr1 = new cr(1);
//  $cr2 = new cr(2);
 
//  $cr2->comp_func_cr($cr1, $cr2);
//  echo $cr2->priv_member;

//  extract(array("test" => array("ss"=>1,"dsfdf"=>2),"test_b" => 2,"ddd",33),EXTR_PREFIX_INVALID ,"XXX_s
//  ");
//  var_dump(get_defined_vars());
 
//  var_dump($test);
//  var_dump($ss);
//  var_dump($test_b);

//var_dump(in_array(array('a',1),array(1,2,'a',array('a','1',2))));
 //$i = 1;

 //var_dump( gettype ( $i * -1));


//list($a,$b,$c,$d,$e) = array(1,2,3,4);

//var_dump(range(5,'3A'));

//var_dump((int)array(6,3,4,array(1,2,3)));

//var_dump(basename('/home/axhm3a/workspace/zend/schulung/index.php','php'));

//file_put_contents('test', "hallo");
//chgrp('test', 'zend');

//var_dump(copy(__FILE__,__FILE__ . ".bak"));

 
 //delete(__FILE__ . ".bak");

 //var_dump(dirname("/hallo/welt/gg/"));
 
// var_dump(disk_free_space("/media/Windows"));



// $filename = 'bar.txt';

// $file_w = fopen($filename, 'w');
// $file_r = fopen($filename, 'r');
// //rewind($file);
// //fwrite($file, 'Foo');

// $str = "Foo";
// var_dump($str);
// for($i = 0;  strlen($str) < 1024 * 1024;$i++) {
// 	$str .= $str;
// }

// var_dump( $str);

// fwrite($file_w, $str);

// rewind($file_r);
// var_dump(fread($file_r, 6));
// fflush($file_w);
// rewind($file_r);
// var_dump(fread($file_r, 6));
// //ftruncate($file, ftell($file));
// fclose($file_w);
// fclose($file_r);

// $fp = fopen('bar.txt','r');
 
//  var_dump(fgetc($fp));
//  var_dump(fgetc($fp));
//  var_dump(fgetc($fp));

//$fp =  popen("/bin/uname -a", "r");
//echo fread($fp,4000);
//echo fclose($fp);

 //$str =  readfile(__FILE__);
 //var_dump($str);

//var_dump(readlink("index2.php"));

 
 //var_dump(realpath_cache_get());
 //var_dump(realpath_cache_size());
 //realpath("/bin/../var/log");
 //var_dump(realpath_cache_get());
 
 //echo tempnam ( "/tmp", "xxx" );
 
 //$it = new RecursiveArrayIterator(array(1,2,array(3,4)));
//var_dump(iterator_to_array($it));
echo "<pre>";
// class Autoloader {
// 	public static function load($className){
// 	var_dump("$className loaded by 1!");
// 	require_once "$className.php";
// 	}
// }

// $l = function($className){
// 	var_dump("$className loaded by 2!");
// 	require_once "$className.php";
// };

// //spl_autoload_register(array("Autoloader","load"));
// //spl_autoload_register($l);
// function __autoload($class){
// 	var_dump($class);
// 	include "$class.php";
// }
// //spl_autoload_call("Auto");
// //var_duoload_register(array("Autoloader","load"));
// //spl_autoload_register($l);
// function __autoload($class){
// 	var_dump($class);
// 	include "$class.php";
// }
// //spl_autoload_call("Auto");
// //var_dump(spl_autoload_functions());
// //spl_autoload_unregister(array("Autoloader","load"));


// $fiat = new Auto();
// $fiat->brumBrum();
//  

// $a = new stdClass();
// $b = new stdClass();

// $c = $a;
// var_dump($a === $b);
// var_dump($a === $a);
// var_dump($a === $c);

// $liste = new SplDoublyLinkedList();

// for ($i = 1; $i <= 10; $i++) {
// 	$liste->push($i);
// }
// $liste->shift();
// var_dump($liste[3]);

// foreach($liste as $val) {
// 	var_dump($val);
// }


//var_dump(isset($test[3]));
//var_dump(get_defined_vars());


// $string = "www.hallo.de/äpfel sind toll";

// var_dump(rawurlencode($string));

// var_dump(urlencode($string));

// var_dump(base64_encode($string));

//var_dump($_SERVER);

// stream_context_set_default(
// array(
// 'http' => array(
// 'method' => 'HEAD'
// 		)
// )
// );

// var_dump(get_headers("http://www.google.de"));



//var_dump(http_build_query($_SERVER));

//var_dump(parse_url("http://www.google.de/search/s1/s2/?f=x&g=y#test"));

// $string = "hallo welt";

// $b64 = base64_encode($string);

// var_dump($b64);

// $b64 = substr_replace($b64, '*', 4,1);

// var_dump($b64);

// var_dump(base64_decode($b64));
// var_dump(base64_decode($b64,true));

//var_dump(explode(PATH_SEPARATOR, get_include_path()));

class garten extends SimpleXMLElement {

}

$xml = "<baum><ast/><ast><blatt/><frucht/></ast><ast><frucht name='kirsche'/></ast></baum>";
//$obj = simplexml_load_string($xml,"garten",LIBXML_NOXMLDECL);

//$obj2 = simplexml_load_string($xml);

//var_dump($obj);
// foreach($obj as $ast) {
// 	var_dump($ast);
// }

//var_dump($obj->xpath("//*/frucht/@name"));
//var_dump($obj->asXML("./test.xml"));


?> 











