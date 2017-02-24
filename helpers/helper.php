<?php
/**
 * Created by PhpStorm.
 * User: chqss
 * Date: 2017/2/24 0024
 * Time: 7:17
 */

if (!function_exists('dd')) {
    function dd()
    {
        array_map(function ($x) {
            (new csi0n\Debug\Dumper())->dump($x);
        }, func_get_args());
        exit(1);
    }
}
