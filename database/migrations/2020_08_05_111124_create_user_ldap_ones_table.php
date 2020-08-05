<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLdapOnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_ldap_ones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('samAccountName')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('department')->nullable();
            $table->json('groups')->nullable();
            $table->string('objectGUID')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_ldap_ones');
    }
}
