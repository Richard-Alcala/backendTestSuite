<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSuitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('test_suites')->insert([
            [
                'name' => 'API Testing - Booking Reservation',
                'description' => 'Testing the API endpoints for the booking reservation system.',
                'platform' => 'Laravel + Postman',
                'status' => 'Complete, 30 hours',
            ],
            [
                'name' => 'Web Testing - Booking Reservation',
                'description' => 'Testing the web interface of the booking reservation system for UI and functionality.',
                'platform' => 'ReactJS + Cypress',
                'status' => 'In Progress, 25 hours',
            ],
            [
                'name' => 'Mobile Testing - Booking Reservation',
                'description' => 'Testing the mobile app for the booking reservation system on both iOS and Android.',
                'platform' => 'Vue.js + Appium',
                'status' => 'Not Started, 35 hours',
            ],
        ]);
    }
}
