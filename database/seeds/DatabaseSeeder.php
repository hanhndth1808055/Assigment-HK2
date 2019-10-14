<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $this->call(UserTableSeeder::class);
=======
         $this->call(GallerySeeder::class);
>>>>>>> b5169f7c44700d458f6b87e33e6ad81b3e5a4af9
    }
}
