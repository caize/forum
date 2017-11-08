<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        foreach (range(1, 20) as $i) {
			DB::table('topics')->insert([
				'user_id' => rand(1, 2),
				'title' => $faker->sentence,
				'slug' => $faker->slug,
				'body' => $faker->text,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			]);
		}
    }
}
