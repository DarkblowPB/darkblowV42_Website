<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('password_encrypt')) {
    function password_encrypt($password = '')
    {
        $ingredient = '/x!a@r-$r%an¨.&e&+f*f(f(a)';
        $encrypt_result = hash_hmac('md5', $password, $ingredient);
        return $encrypt_result;
    }
}
