<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        if (DB::table('users')->count() == 0) {
            $data = array(
                array('name' => 'admin',
                    'email' => 'admin@admin',
                    'admin' => 1,
                    'password' => '$2y$10$hxCk0ysaXi862lW.InItpelhXXQKvjeuXPW/DKBG5IxoYpFIlKPTC',
                    'email_verified_at' => now(),
                    'remember_token' => Str::random(10),
                ),
            );
            DB::table('users')->insert($data);
        }
    }
}
