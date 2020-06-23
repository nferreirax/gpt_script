<?php

use App\Models\Wallets;
use Illuminate\Database\Seeder;

class WalletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wallets::create([
            'id'    => 1,
            'name'  => 'Points',
            'sort' => 1,
            'active'=> 1
        ]);
        Wallets::create([
            'id'     => 2,
            'name'   => 'Balance',
            'sort' => 1,
            'active' => 1
        ]);
    }
}
