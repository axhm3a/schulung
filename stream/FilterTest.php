<?php

include 'Filter.php';

class FilterTest extends PHPUnit_Framework_TestCase {

    private $resource;

    protected function setUp()
    {
        parent::setUp();

        stream_filter_register('myfilter', 'Filter');
        $this->resource = fopen('stream/test', 'r');
        stream_filter_append($this->resource, 'myfilter');
    }

    protected function tearDown()
    {
        parent::tearDown();

        $this->resource = null;
    }

    public function testFilter() {
        $this->assertSame('! tleW ollah', fread($this->resource, 1024));
    }
}
