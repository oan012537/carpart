<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,100) as $value){
            DB::table('products')
            ->insert([
                'brand_id' => $faker->numberBetween(1,81),
                'model_id' => $faker->numberBetween(1,3271),
                'sub_model_id' => $faker->numberBetween(1,3271),
                'issue_year_id' => $faker->numberBetween(1,3271),
                'category_id' => $faker->numberBetween(1,11),
                'sub_category_id' => $faker->numberBetween(1,203),
                'sub_sub_category_id' => $faker->numberBetween(1,296),
                'product_code' => $faker->phoneNumber,
                'product_type' => 'second',
                'name_th' => $faker->name,
                'name_en' => $faker->name,
                'trading_name' => null,
                'grade' => $faker->randomElement([
                    "Genuine",
                    "OEM",
                ]),
                'maker' => null,
                'sku_code' => Str::random(10),
                'quality' => $faker->randomElement([
                    "Excellent",
                    "Good",
                    "Fair",
                    "Poor",
                ]),
                'shop_original_code' => Str::random(10),
                'vin_code' => Str::random(20),
                'full_model_code' => Str::random(10),
                'engine_model_code' => Str::random(10),
                'trim' => $faker->randomElement([
                    "gray",
                    "white",
                    "brown",
                    "beige",
                ]),
                'color' => $faker->randomElement([
                    "black",
                    "white",
                    "blue",
                    "green",
                    "red",
                    "yellow",
                ]),
                'is_warranty' => $faker->numberBetween(1,3),
                'term_and_condition' => $faker->realText(300),
                'price' => $faker->numberBetween(500,50000),
                'is_active' => '1',
                'created_by' => $faker->numberBetween(1,5),
                'created_at' => $faker->dateTimeThisDecade,
            ]);
        }
    }
}
