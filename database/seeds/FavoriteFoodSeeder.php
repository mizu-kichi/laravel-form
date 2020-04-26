<?php

use Illuminate\Database\Seeder;
use App\Eloquents\FavoriteFood;

class FavoriteFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $food_names = [
            'ラーメン',
            'お好み焼き',
            'パスタ',
            'すき焼き'
        ];

        foreach ($food_names as $food_name) {
            FavoriteFood::create(['name' => $food_name]);
        }
    }
}
