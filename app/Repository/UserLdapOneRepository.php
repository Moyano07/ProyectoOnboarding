<?php
namespace App\Repository;

use Illuminate\Support\Facades\DB;

class UserLdapOneRepository
{
    private $table ;

    public function __construct()
    {
       $this->table = DB::table('user_ldap_ones');
    }

    public function insertOrIgnore($users)
    {
        $this->table->insertOrIgnore($users);
    }
}
