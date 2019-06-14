<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Dresses',
                'description' => 'The The Dress Shop event is over, but there is still more to discover.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Jewelry',
                'description' => 'The Fashion Week | Your fashion, your style event is over, but there is still more to discover.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Sunglasses',
                'description' => 'The Sunglasses with Free Shipping event is over, but there is still more to discover.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
