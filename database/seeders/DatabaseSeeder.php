<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

/**
 * @method call(string[] $array)
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            AdminsSeeder::class,
            CategorySeeder::class,
            BrandSeeder::class,
            SlidersSeeder::class,
            UserTableSeeder::class,
        ]);
    }
}
