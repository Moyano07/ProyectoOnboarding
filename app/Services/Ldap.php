<?php

namespace App\Services;


class Ldap{


    public static function connection()
    {
        $ad = new \Adldap\Adldap();

        $config = [
            'hosts'             => ['','172.17.17.46'],
            'port'           => '389',
            'username'          => 'onevision',
            'password'          => 'yawinu178',
            'base_dn'  =>    'CN=onevision,OU=Services,OU=Accounts,OU=Uniway-MAD,DC=uniway,DC=local',
            'version' => 3,
            'custom_options' => [
                'LDAP_OPT_X_TLS_CERTFILE' => 'Google_2023_02_05_35779.crt',
               'LDAP_OPT_X_TLS_KEYFILE' => 'Google_2023_02_05_35779.key',
            ]

        ];

       return  $ad->addProvider($config);
    }
}
