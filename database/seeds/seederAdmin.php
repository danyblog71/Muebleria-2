<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class seederAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'administrador',
            'last_name' => 'ad',
            'username' => 'Admin',
            'email' => 'admin@admin.com',
            'phone' => '1111111111',
            'password' => Hash::make('admin123'),
            'roles_id' => 1,
        ]);
    }
}
