<?php

use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prices = array(
            '1' => '11290000',
            '2' => '11290000',
            '3' => '11390000',
            '4' => '11690000',
            '5' => '11900000',
            '6' => '12190000',
            '7' => '12190000',
            '8' => '14900000',
            '9' => '20990000',
            '10' => '22990000',
            '11' => '24490000',
            '12' => '26990000',
            '13' => '29990000',
            '14' => '19990000',
            '15' => '24990000',
            '16' => '28990000',
            '17' => '33990000',
            '18' => '33990000',
            '19' => '38990000',
            '20' => '44990000',
            '21' => '44990000',
            '22' => '59990000',
            '23' => '29990000',
            '24' => '24490000',
            '25' => '21990000',
            '26' => '17290000',
            '27' => '16290000',
            '28' => '14290000',
            '29' => '13990000',
            '30' => '13490000',
            '31' => '13290000',
            '32' => '34790000',
            '33' => '29990000',
            '34' => '28790000',
            '35' => '25790000',
            '36' => '23990000',
            '37' => '22990000',
            '38' => '19990000',
            '39' => '12990000',
            '40' => '12490000',
            '41' => '5990000',
            '42' => '3290000',
            '43' => '2990000',
            '44' => '2590000',
            '45' => '19990000',
            '46' => '11990000',
            '47' => '9990000',
            '48' => '6990000',
            '49' => '6990000',
            '50' => '4990000',
            '51' => '3590000',
            '52' => '8990000',
            '53' => '6990000',
            '54' => '5990000',
            '55' => '4990000',
            '56' => '3860000',
            '57' => '2790000'
        );
        $rows = [];
        for ($i=1; $i <= count($prices); $i++) {
            $rows[] = [
                'price' => $prices[$i],
                'product_id' => $i
            ];
        }
        DB::table('prices')->insert($rows);
    }
}
