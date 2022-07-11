<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductReview extends Seeder
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
            DB::table('product_reviews')
            ->insert([
                'users_buyer_id' => $faker->numberBetween(1,5),
                'product_id' => $faker->numberBetween(1,10),
                'review_detail' => $faker->realText(200),
                'review_score' => $faker->numberBetween(1,5),
                'is_active' => '1',
                'created_by' => $faker->numberBetween(1,5),
                'created_at' => $faker->dateTimeThisDecade,
            ]);
        }
    }
}
