<?php

use Illuminate\Database\Seeder;

class ToDostableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\ToDo', 7)->create();
    }
}
