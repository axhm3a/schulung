<?php
$dom = new DOMDocument();
$dom->load('../inventory.xml');
$authors = $dom->getElementsByTagName('author');
var_dump($dom->getElementsByTagName('magazine')->item(0)->attributes->getNamedItem('style')->nodeValue);

// from http://de.php.net/manual/de/domxpath.registerphpfunctions.php
// but changed

$xpath = new DOMXPath($dom);

$xpath->registerNamespace("php", "http://php.net/xpath");
$xpath->registerPHPFunctions();

$nodes = $xpath->query('//book/author[php:functionString("substr", last-name, 0, 1) = "B"]');

echo "Found {$nodes->length} authors with last-name starting with 'B':\n<br/>";
foreach ($nodes as $node) {
	$authorFirstName = $node->getElementsByTagName("first-name")->item(0)->nodeValue;
	$authorLastName = $node->getElementsByTagName("last-name")->item(0)->nodeValue;
	echo "$authorFirstName $authorLastName \n<br/>";
}