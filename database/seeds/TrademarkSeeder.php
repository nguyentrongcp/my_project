<?php

use Illuminate\Database\Seeder;

class TrademarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trademarks')->insert([
            [
                'name' => 'Dell'
            ],
            [
                'name' => 'Asus'
            ],
            [
                'name' => 'HP'
            ],
            [
                'name' => 'Acer'
            ],
            [
                'name' => 'Lenovo'
            ],
            [
                'name' => 'LG'
            ],
        ]);
    }
}