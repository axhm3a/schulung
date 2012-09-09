<?php
error_reporting(E_ALL | E_STRICT);
echo '<pre>';


/**
 * Interfaces:
	OuterIterator
	RecursiveIterator
	SeekableIterator
 */

class recursive implements RecursiveIterator
{
	private $items = array();
	private $pos = 0;
	
	public function __construct($id = 0)
	{
		$id++;
		if ($id < 3)
		$this->items = array(
			new recursive($id),
			new recursive($id),
			new recursive($id));
	}
	
	public function getChildren ( )
	{
		return $this->items[$this->key()];
	}
	public function hasChildren()
	{
		return $this->valid();
	}
	 
	public function current (  ){
		return $this->getChildren();
	}
	public function key (  ){
		return $this->pos;
	}
	public function next (  ){
		$this->pos++;
	}
	public function rewind (  ){
		$this->pos = 0;
	}
	public function valid (  ){
		return isset($this->items[$this->key()]);
	}
}

//$rekusivIterator = new recursive();
////var_dump($rekusivIterator);
//foreach($rekusivIterator as $key => $value)
//{
//	var_dump($key, $value, '----');
//}

class Outer implements OuterIterator
{
	private $items = array();
	private $pos = 0;
	private $iteratorPos = 0;
	
	public function __construct()
	{
		$this->items = new ArrayIterator(array(
			new ArrayIterator(array('d','e','f')),
			new ArrayIterator(array('g','h','i')),
			new ArrayIterator(array('j','k','l'))
		)
		);
	}
	
	 public function getInnerIterator()
	 {
	 	return $this->items[$this->pos];
	 }
	 
	public function current(){
		$iterator = $this->getInnerIterator();
		return $iterator[$this->iteratorPos];
	}
	public function key (  ){
		return $this->pos.' '.$this->iteratorPos;
	}
	public function next (  ){
		$this->iteratorPos++;
		if (! $this->valid())
		{
			$this->iteratorPos = 0;
			$this->pos++; 
		}
	}
	public function rewind (  ){
		$this->pos = 0;
		$this->iteratorPos = 0;
	}
	public function valid (  ){
		$valid = false;
		if (isset($this->items[$this->pos]))
		{
			$iterator = $this->getInnerIterator();
			if (isset($iterator[$this->iteratorPos]))
			{
				$valid = true;
			}
		}
		return $valid;
	}
}

//$outerIterator = new Outer();
////var_dump($outerIterator);
//foreach($outerIterator as $key => $value)
//{
//	var_dump($key, $value, '----');
//}
//die;
/* Klassen:
 * 
    IteratorIterator
    
    AppendIterator
    ArrayIterator
    CachingIterator
    CallbackFilterIterator
    DirectoryIterator
    EmptyIterator
    FilesystemIterator
    FilterIterator
    GlobIterator
    InfiniteIterator
    LimitIterator
    MultipleIterator
    NoRewindIterator
    ParentIterator
    RecursiveArrayIterator
    RecursiveCachingIterator
    RecursiveCallbackFilterIterator
    RecursiveDirectoryIterator
    RecursiveFilterIterator
    RecursiveIteratorIterator
    RecursiveRegexIterator
    RecursiveTreeIterator
    RegexIterator
    
 */
//$IteratorA = new ArrayIterator(array('a','b','c'));
//$IteratorB = new ArrayIterator(array('z','x','y'));
//
//$outerIterator = new AppendIterator();
//$outerIterator->append($IteratorA);
//$outerIterator->append($IteratorB);
//foreach($outerIterator as $key => $value)
//{
//var_dump($outerIterator->getInnerIterator());
////var_dump($outerIterator->getIteratorIndex());
//	var_dump($key, $value, '----');
//}

//$cache = new CachingIterator(new ArrayIterator(array('a','b','c')));
//foreach ($cache as $key => $value)
//{
//	var_dump($key, $value, '----');
//}
//
//$dir = new FilesystemIterator(__DIR__);
//
//foreach ($dir as $key => $value)
//{
//	var_dump($key, $dir->getSize(), '----');
//}

$dir = new RecursiveDirectoryIterator	(__DIR__, RecursiveDirectoryIterator::NEW_CURRENT_AND_KEY);
/*
foreach ($dir as $key => $value)
{
	var_dump($key, $value->getChildren(), '----');
}*/

$tree = new RecursiveTreeIterator($dir, RecursiveTreeIterator::PREFIX_MID_HAS_NEXT);

//foreach ($tree as $key => $value)
//{
//	echo ($value).'<br/>';
////	var_dump($key, $value, '----');
//}

$file = new SplFileObject(__FILE__);
foreach ($file as $key => $value)
{
	var_dump($key);
}