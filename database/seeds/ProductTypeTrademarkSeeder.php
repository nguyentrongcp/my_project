<?php

use Illuminate\Database\Seeder;

class ProductTypeTrademarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_type_trademarks')->insert([
            [
                'product_type_id' => 1,
                'trademark_id' => 1,
            ],
            [
                'product_type_id' => 1,
                'trademark_id' => 2,
            ],
            [
                'product_type_id' => 1,
                'trademark_id' => 3,
            ],
            [
                'product_type_id' => 2,
                'trademark_id' => 4,
            ],
            [
                'product_type_id' => 2,
                'trademark_id' => 5,
            ],
            [
                'product_type_id' => 2,
                'trademark_id' => 6,
            ],
            [
                'product_type_id' => 2,
                'trademark_id' => 7,
            ]
        ]);
    }
}