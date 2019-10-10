<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\User::class,20)->create();
        factory(App\scholarship::class,20)->create();
    }
}
