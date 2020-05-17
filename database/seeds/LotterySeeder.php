<?php

use App\Lottery;
use Illuminate\Database\Seeder;

class LotterySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        foreach (range(0, 30) as $i) {
            Lottery::insert([
                'name' => $name = $faker->words(3, true),
                'slug' => Str::slug($name, '-', 'pl'),
                'created_at' => $created = $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => $created
            ]);
        }
    }
}
