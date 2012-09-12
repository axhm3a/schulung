<?php
/*
 function hello()
 {
return 'test';
}

echo $txt = hello();
*/
/*
 class testClass{
function test(){
return;
}
}

testClass::test();
*/
// 4.17
class halo{
	public static $vari = "asdf<br/>";
}
echo halo::$vari;

$object = new halo();
echo $object::$vari;

$klasse = 'halo';

echo $klasse::$vari;

//7.3
$a = "str";
$b = "str";
var_dump((object)$a===(object)$b);


/*
Frage 12 Buch 11.8:
Interface :  2
Abstrakte : 1 Marco
kann nicht realisiert werden: 1 Sven

8.20
Cookie setzen und http-request
stream_setCookie
file_get_contents
fopen fpassthru

12.17
wurde mit PHP 5 eingefürt (2 Möglichkeiten)
session.use_only_cookies			
session.hash_function				
session.cookie_secure				
session.cache_expires				
session.hash_bits_per_character 	

9.5
session löschen

8.2

5.20
chroot

11.9
was ist ein Zeiger

7.18

*/
?>