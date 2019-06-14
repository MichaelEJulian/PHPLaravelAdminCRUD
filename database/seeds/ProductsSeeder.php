<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Hot Women Holiday Strappy Button Pocket Ladies Summer Beach Midi Swing Sun Dress',
                'description' => 'It is made of high quality materials,durable enought for your daily wearing. Stylish and fashion make you more attractive',
                'price' => 7.98,
                'category_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Womens Vintage Boho Long Maxi Evening Party Dress Summer Casual Beach Sundress',
                'description' => 'It is a Summer Must have and a statement piece that will turn heads. Beautiful and high quality dress,Full Length,  Chiffon Material',
                'price' => 7.95,
                'category_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Diamond Jewel 14K Gold Round Diamond Stud Earrings',
                'description' => 'The weight of a precious stone and easiest way to measure a diamond.One carat is equal to 200 miligrams.',
                'price' => 799,
                'category_id' => 2,
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'J+S Premium Military Style Classic Aviator Sunglasses, Polarized, 100% UV protection',
                'description' => 'POLARIZED LENS, UV 400 PROTECTION, HIGH QUALITY FRAME, PERFECT ALL ROUNDER, 100% RISK FREE PURCHASE',
                'price' => 16.99,
                'category_id' => 3,
                'created_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
