<?php

use App\Models\User;
use Carbon\Carbon;
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
        User::create([
            'username'      => 'user',
            'name'      => 'User',
            'email'     => 'user@user.com',
            'password'  => Hash::make('12345678'),
            'email_verified_at' => Carbon::now()
        ]);
        User::create([
            'username'      => 'admin',
            'name'      => 'Admin',
            'email'     => 'admin@admin.com',
            'is_admin'     => 1,
            'password'  => Hash::make('12345678'),
            'email_verified_at' => Carbon::now()
        ]);
    }
}
