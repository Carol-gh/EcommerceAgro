<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'UserAdmin',
            'email' => 'superusuario@admin.com',
            'password' => bcrypt('123456789'),
            'role_id' => '1'
        ])->assignRole('Admin');
    }
}
