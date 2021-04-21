<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Coupon;
use Illuminate\Database\Seeder;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::updateOrCreate([
            'name'  => 'admin',
            'email' => 'admin@test.com',
        ], [
            'name'     => 'admin',
            'email'    => 'admin@test.com',
            'password' => \Hash::make('secret'),
            'type'     => 'super-admin',
        ]);

        $admin->image()->create([
            'url'       => 'default.png',
            'base_path' => 'default.png',
            'type'      => 'default.png',
        ]);

        $vendor = Admin::updateOrCreate([
            'name'  => 'vendor',
            'email' => 'vendor@test.com',
        ], [
            'name'     => 'vendor',
            'email'    => 'vendor@test.com',
            'password' => \Hash::make('secret'),
            'type'     => 'vendor',
        ]);

        $vendor->coupons()->createMany(Coupon::factory()->count(10)->make()->toArray());

        $vendor->image()->create([
            'url'       => 'default.png',
            'base_path' => 'default.png',
            'type'      => 'default.png',
        ]);
    }
}
