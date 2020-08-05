<?php

namespace App\Http\Controllers;

use App\UserLdapOne;
use Illuminate\Http\Request;
use App\Services\LdapService;

class UserLdapOneController extends Controller
{
    private $provider;

    public function __construct()
    {
        $this->provider = LdapService::connection();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->provider->search()->users()->get();
    //$results = $provider->search()->select(['telephone', 'mail']);

    return view('ldap.userList',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserLdapOne  $userLdapOne
     * @return \Illuminate\Http\Response
     */
    public function show(UserLdapOne $userLdapOne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserLdapOne  $userLdapOne
     * @return \Illuminate\Http\Response
     */
    public function edit(UserLdapOne $userLdapOne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserLdapOne  $userLdapOne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserLdapOne $userLdapOne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserLdapOne  $userLdapOne
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserLdapOne $userLdapOne)
    {
        //
    }
}
