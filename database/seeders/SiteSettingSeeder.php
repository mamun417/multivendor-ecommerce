<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Faker\Factory;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = Factory::create();
        SiteSetting::factory()->count(1)->create()->each(function (SiteSetting $siteSetting) use ($faker) {
            $siteSetting->image()->create([
                'url' => $faker->imageUrl(100, 250)
            ]);
        });
    }
}
