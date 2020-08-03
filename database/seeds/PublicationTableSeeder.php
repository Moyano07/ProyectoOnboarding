<?php

use App\Publication;
use Illuminate\Database\Seeder;

class PublicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Publication::class,10)->create();
    }
}
