<?php

use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            'amount' => 0,
            'type' => 'd',
            'count' => 0
        ]);

        DB::table('transactions')->insert([
            'amount' => 0,
            'type' => 'w',
            'count' => 0
        ]);
    }
}
