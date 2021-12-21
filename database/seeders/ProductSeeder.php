<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=> 'sports shoes',
                'price'=> '700',
                'description'=> 'Sports Shoes with 1 year guarantee',
                'category'=> 'shoes',
                'gallery'=> 'C:/Documents/shoes.jpg'
            ],
            [
                'name'=> 'leather shoes',
                'price'=> '1000',
                'description'=> 'Leather shoes',
                'category'=> 'shoes',
                'gallery'=> 'C:/Documents/shoes.jpg'
            ],
            [
                'name'=> 'whirlpool washing machine',
                'price'=> '10000',
                'description'=> 'Whirlpool washing machine',
                'category'=> 'washing machine',
                'gallery'=> 'C:/Documents/washing-machine.jpg'
            ],
            [
                'name'=> ' LG washing machine',
                'price'=> '15000',
                'description'=> 'Washing machine with latest features',
                'category'=> 'washing machine',
                'gallery'=> 'C:/Documents/washing-machine.jpg'
            ],
        ]);
    }
}
