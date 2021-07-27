<?php

namespace Database\Seeders;

use App\Models\Set;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class SetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i=0; $i<5; $i++){
            $c = random_int(3, 5);
            $n = random_int(1, 5);
            Set::create([
                'scry_id' => $faker->uuid,
                'code' => Str::random($c),
                'name' => $faker->sentence($nbWords = $n, $variableNbWords = true),
                'release_date' => $faker->dateTimeBetween($startDate = '-28 years', $endDate = 'now', $timezone = null),
                'icon_svg_uri' => $faker->imageUrl(Str::random($c), true,),
            ]);
        }
    }
}
