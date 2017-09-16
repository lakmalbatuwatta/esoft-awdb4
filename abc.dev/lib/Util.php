<?php

/**
 * Created by PhpStorm.
 * User: PiushaKalyana
 * Date: 9/16/17
 * Time: 11:25 AM
 *
 * All the Utility functions will be implement here
 */

namespace Lib;


class Util
{

    /**
     * Explode String
     * @param string $delimiter
     * @param $str
     * @return array
     */
    public static function explode($delimiter = ',', $str){

        return explode($delimiter,$str);

    }

}