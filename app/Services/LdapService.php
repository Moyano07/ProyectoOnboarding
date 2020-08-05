<?php

namespace App\Services;


class LdapService{


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
}
