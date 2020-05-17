<?php

use Illuminate\Database\Seeder;

class LotteryTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $lotteries = \App\Lottery::all();

        foreach ($lotteries as $lottery) {

            foreach(range(0, rand(20, 30)) as $j) {
                $lottery->lottery_tickets()->create([
                    'created_at' => $created = $faker->dateTimeBetween('-3 years', 'now'),
                ]);
            }

        }
    }
}
