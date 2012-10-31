<?php

class Wrapper {
    private $data = '';
    private $pointer = 0;

    function stream_open($path, $mode, $options, &$opened_path)
    {
        $this->data = '';
        $this->pointer = 0;
        return true;
    }

    function stream_read($count)
    {
        return substr($this->data, $this->pointer, $count);
    }

    function stream_write($data)
    {
        $count = strlen($data);

        $array = str_split($this->data);
        for ($i = 0; $i < $count; $i++) {
            $array[$this->pointer++] = $data[$i];
        }
        $this->data = implode('', $array);

        return $count;
    }

    function stream_tell()
    {
        return $this->pointer;
    }

    function stream_eof()
    {
        return ! isset($this->data[$this->pointer]);
    }

    function stream_seek($offset, $whence)
    {
        $this->pointer = $offset;
        return true;
    }
}
