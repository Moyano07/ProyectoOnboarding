<?php

namespace App\Services;


class LdapService{

    public function __construct()
    {

    }

    public static function connection()
    {
        $ad = new \Adldap\Adldap();

        $config = [
            'hosts'             => ['','172.17.17.47'],
            'port'           => '389',
            'username'          => 'onevision',
            'password'          => 'yawinu178$',
            'base_dn'  =>    '
                              DC=uniway,
                              DC=local',


        ];
        try {
            $ad->addProvider($config);
            return $ad->connect();
        }
        catch (\Adldap\Auth\BindException $e) {
            echo 'Error: '.$e->getMessage()."\r\n";
        }


    }

    public function getUsers()
    {
        $provider =  self::connection();

        return $provider->search()->select(['cn', 'samaccountname', 'department', 'mail','group','objectGUID'])->get();
    }

    public static function convertObjectGUID2Str($oguid) {

        $hex_guid = bin2hex($oguid);
        $hex_guid_to_guid_str = '';
        for($k = 1; $k <= 4; ++$k) { $hex_guid_to_guid_str .= substr($hex_guid, 8 - 2 * $k, 2); }
        $hex_guid_to_guid_str .= '-';
        for($k = 1; $k <= 2; ++$k) { $hex_guid_to_guid_str .= substr($hex_guid, 12 - 2 * $k, 2); }
        $hex_guid_to_guid_str .= '-';
        for($k = 1; $k <= 2; ++$k) { $hex_guid_to_guid_str .= substr($hex_guid, 16 - 2 * $k, 2); }
        $hex_guid_to_guid_str .= '-' . substr($hex_guid, 16, 4);
        $hex_guid_to_guid_str .= '-' . substr($hex_guid, 20);
        //dump($hex_guid_to_guid_str);die;
        return strtoupper($hex_guid_to_guid_str);
    }
}
