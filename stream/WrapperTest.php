<?php

include_once 'Wrapper.php';

class WrapperTest extends PHPUnit_Framework_TestCase {
    
    private $resource;

    protected function setUp()
    {
        parent::setUp();

        stream_register_wrapper('array', 'Wrapper');
        $this->resource = fopen('array://filenameegal','a');

    }

    protected function tearDown()
    {
        parent::tearDown();
        fclose($this->resource);
        $this->resource = null;
        stream_wrapper_unregister('array');
    }

    public function testCount() {
        $string = "Hallo";
        $this->assertSame(5, strlen($string));
        $this->assertSame('a', $string[1]);
    }

    public function testReadWriteSeek() {
        $this->assertSame('', fread($this->resource, 1));
        $this->assertSame(7, fwrite($this->resource, 'inhallt'));
        $this->assertSame(8, fwrite($this->resource, 'inhallt2'));
        $this->assertSame(9, fwrite($this->resource, 'inhallt33'));
        $this->assertSame(10, fwrite($this->resource, 'inhallt332'));
        $this->assertSame('', fread($this->resource, 1));

        $this->assertSame(0, fseek($this->resource, 2));

        $this->assertSame('hal', fread($this->resource, 3));
        $this->assertSame('lt', fread($this->resource, 2));
    }

    public function testRead() {
        stream_filter_append($this->resource,'string.toupper');

        $this->assertSame(7, fwrite($this->resource, 'inhallt'));
        $this->assertSame(8, fwrite($this->resource, 'inhallt2'));
        $this->assertSame(9, fwrite($this->resource, 'inhallt33'));
        $this->assertSame(10, fwrite($this->resource, 'inhallt332'));

        $this->assertSame(0, fseek($this->resource, 2));

        $this->assertSame('HAL', fread($this->resource, 3));
        $this->assertSame('LT', fread($this->resource, 2));
    }
}