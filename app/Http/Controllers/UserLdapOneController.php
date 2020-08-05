<?php

namespace App\Http\Controllers;

use Adldap\Models\Attributes\Guid;
use App\Repository\UserLdapOneRepository;
use App\UserLdapOne;
use Illuminate\Http\Request;
use App\Services\LdapService;

class UserLdapOneController extends Controller
{
    private $ldapService;

    private $userLdapOnesRepository;

    public function __construct(LdapService $ldapService,
                                UserLdapOneRepository $userLdapOnesRepository)
    {
        $this->ldapService = $ldapService;
        $this->userLdapOnesRepository = $userLdapOnesRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = $this->ldapService->getUsers();
        $usersApp =[];
        foreach ($users as $user) {
            $usersApp[] = [
                'samAccountName' => $user->samAccountName[0]?? null,
                'name'=> $user->cn[0]?? null,
                'email' => $user->mail[0]?? null,
                'department' => $user->department[0]?? null,
                'groups' => null,
                'objectGUID' => $user->objectGUID !==null?$this->ldapService->convertObjectGUID2Str($user->objectGUID[0]): null

            ];
        }

        $this->userLdapOnesRepository->insertOrIgnore($usersApp);

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
