<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\User([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'vk_id' => 0,
            'password' => Hash::make('123456'),

        ]);
        $admin->save();
    }
}
