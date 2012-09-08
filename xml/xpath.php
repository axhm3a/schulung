<?php
$xmlElement = simplexml_load_file('../inventory.xml');

// ermittel alle Elemente, die als 'first-name' Joe haben
$xpath = $xmlElement->xpath("//first-name[text()='Joe']/..");
var_dump($xpath);

// ermittel alle Editoren
$xpath = $xmlElement->xpath("//editor");
var_dump($xpath);

// ermittel alle Editoren, die als 'first-name' Britney haben
$xpath = $xmlElement->xpath("//editor/first-name[text()='Britney']/..");
var_dump($xpath);

// ermittel alle Authoren, die eine publikation haben
$xpath = $xmlElement->xpath("//author/publication/..");
var_dump($xpath);

// ermittel alle Authoren, die eine publikation haben, wo es Mitauthoren gibt
$xpath = $xmlElement->xpath("//author/publication/author/../..");
var_dump($xpath);