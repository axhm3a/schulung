<?php
/**
 * Created by JetBrains PhpStorm.
 * User: marco
 * Date: 31.10.12
 * Time: 17:51
 * To change this template use File | Settings | File Templates.
 */
class Filter
{
    public $filtername = "myfilter";
    public $params;

    /**
     * @param resource $in
     * @param resource $out
     * @param int &$consumed
     * @param bool $closing
     */
    public function filter (  $in ,  $out , &$consumed , $closing )
    {
        if ( !$closing ) {
            $bucket = stream_bucket_make_writeable($in);

            $length = strlen($bucket->data);

            $data = $bucket->data;

            $bucket->data = '';
            for($i=$length-1; $i >= 0; $i--) {
                $bucket->data .= $data[$i];
            }

            $consumed += $bucket->datalen;
            stream_bucket_append($out, $bucket);
        }
        return PSFS_PASS_ON;
    }

    /**
     * @return bool
     */
    public function onClose()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function onCreate ()
    {
        return true;
    }
}
