<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhoneBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        DB::table('phone_books')->insert([
            [
                'first'      => 'Suhaib',
                'last'       => 'Nusratzoda',
                'phone'      => '+992 93 127 2616',
                'handle'     => 'sd',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'first'      => 'Abdullo',
                'last'       => 'Sheralizoda',
                'handle'     => 'sd',
                'phone'      => '+992 93 127 2616',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'first'      => 'Salim',
                'last'       => 'Shomurod',
                'handle'     => 'sd',
                'phone'      => '+992 93 127 2616',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'first'      => 'Shohin',
                'last'       => 'Shoh',
                'handle'     => 'sd',
                'phone'      => '+992 93 127 2616',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'first'      => 'Ali',
                'last'       => 'Top',
                'handle'     => 'sd',
                'phone'      => '+992 93 127 2616',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}