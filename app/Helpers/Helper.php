<?php

function is_populated($collection)
{
    return is_object($collection) && $collection->count() > 0;
}

function cache_enabled()
{
    return Config::get('cache.enabled', false);
}

function crypto_rand_secure($min, $max) {
        $range = $max - $min;
        if ($range < 0) return $min; // not so random...
        $log = log($range, 2);
        $bytes = (int) ($log / 8) + 1; // length in bytes
        $bits = (int) $log + 1; // length in bits
        $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd >= $range);
        return $min + $rnd;
}

function createCode($length){
    $token = "";
    $codeAlphabet = "dqAcVPseLSDpaUGE79Wf0nrzOv";
    $codeAlphabet.= "5Z2NQYkKHFmjh8Ti1wxguB3t6y";
    $codeAlphabet.= "oJCl4bXRIM";

    $twoAlphabet = "5CT6hsVkK8MEHeotbgcJSWrjXB";
    $twoAlphabet.= "vU9Gqp2w7zuODRn3a41yNdliFm";
    $twoAlphabet.= "YQxLIA0fPZ";

    for($i=0;$i<($length/2);$i++){
        $token .= $codeAlphabet[crypto_rand_secure(0,strlen($codeAlphabet))];
        $token .= $twoAlphabet[crypto_rand_secure(0,strlen($twoAlphabet))];
    }
    return $token;
}

function str_simplify($str) {
    $unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'Th', 'ß'=>'ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'th', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'th', 'ÿ'=>'y' );
    return strtr( $str, $unwanted_array );
}

function str_ident($str, $sep = '') {
    $str = str_simplify($str);
    $str = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $str);
    $str = \Illuminate\Support\Str::slug($str, $sep);
    return $str;
}

function is_assoc($array){
    return is_array($array) && array_diff_key($array,array_keys(array_keys($array)));
}

