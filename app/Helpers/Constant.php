<?php

namespace App\Helpers;

class Constant
{
    public static $gender = [
        '' => ' --- Gender ---',
        '1' => 'Male',
        '2' => 'Female',
        '3' => 'Other',
    ];

    public static $role = [
        '' => ' --- Gender ---',
        '1' => 'Admin',
        '2' => 'Nhân Viên',
    ];

    public static function encryptData($textToEncrypt)
    {
        $encryptedMessage = openssl_encrypt($textToEncrypt, config('app.cipher'), config('app.secret_hash'), 0, config('app.iv'));
        $encryptedMessage = str_replace("+", "-", $encryptedMessage);
        $encryptedMessage = str_replace("/", "_", $encryptedMessage);
        return $encryptedMessage;
    }

    public static function decryptData($textToDecrypt)
    {
        $textToDecrypt = str_replace("-", "+", $textToDecrypt);
        $textToDecrypt = str_replace("_", "/", $textToDecrypt);
        $decryptedMessage = openssl_decrypt($textToDecrypt, config('app.cipher'), config('app.secret_hash'), 0, config('app.iv'));
        return $decryptedMessage;
    }

    public static function checkToken($json)
    {
        $decode = json_decode($json);
        if (isset($decode->email) && $decode->email && isset($decode->expired) && $decode->expired > time()) {
            return true;
        }
        return false;
    }
}