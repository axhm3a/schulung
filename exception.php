<?php
/**
 * Created by JetBrains PhpStorm.
 * User: marco
 * Date: 14.11.12
 * Time: 17:42
 * To change this template use File | Settings | File Templates.
 */

class myException extends Exception
{
    public function __construct($value)
    {
        if ($value == 'special') {
            throw new Exception('oops: special error');
        } else {
            throw new Exception('oops: generic error');
        }
    }
}

try {
    $e = new myException('unknown');
} catch (myException $e) {
    echo 'Error: '. $e->getMessage();
}