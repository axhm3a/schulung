<?php
echo '<pre>';

$AggregateIterator = new ArrayIterator(array('z'=> 'a','b', 0 => 'c'));

foreach($AggregateIterator as $key => $value)
{
	var_dump($key, $value, '----');
}
