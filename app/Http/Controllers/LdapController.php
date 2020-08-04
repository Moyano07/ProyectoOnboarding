<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Ldap;

class LdapController extends Controller
{

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }


    public function userList()
    {

       $ad = Ldap::connection();
       try {
        $provider = $ad->connect();


        $results = $provider->search()->users()->get();



    } catch (\Adldap\Auth\BindException $e) {

    }

    return view('ldap.userList',compact('result'));
    }
}
