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
            'status'   => 1,
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
            'name'          => 'vendor',
            'vendor_name'   => '',
            'nid'           => '12345678901',
            'trade_licence' => '12345678901',
            'mobile'        => '000000000',
            'address'       => 'dhaka bangladesh',
            'email'         => 'vendor@test.com',
            'password'      => \Hash::make('secret'),
            'type'          => 'vendor',
            'status'        => 1,
        ]);

        $vendor->coupons()->createMany(Coupon::factory()->count(10)->make()->toArray());

        $vendor->image()->create([
            'url'       => 'default.png',
            'base_path' => 'default.png',
            'type'      => 'default.png',
        ]);
    }
}
