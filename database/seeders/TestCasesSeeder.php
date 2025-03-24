<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestCasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('test_cases')->insert([
            [
                'name' => 'Test Case 1: Verify login page loads correctly',
                'description' => 'Verify that the login page loads without any errors.',
                'steps' => '1. Go to the login page. 2. Ensure that the login form is displayed.',
                'testsuite_id' => 1, 
            ],
            [
                'name' => 'Test Case 2: Verify valid user login',
                'description' => 'Verify that a user with valid credentials can log in successfully.',
                'steps' => '1. Go to the login page. 2. Enter a valid username and password. 3. Click the login button. 4. Ensure that the user is redirected to the dashboard.',
                'testsuite_id' => 2, 
            ],
            [
                'name' => 'Test Case 3: Verify invalid login attempt',
                'description' => 'Verify that an invalid login attempt shows an error message.',
                'steps' => '1. Go to the login page. 2. Enter an invalid username or password. 3. Click the login button. 4. Ensure that an error message is displayed indicating invalid credentials.',
                'testsuite_id' => 3, 
            ],
        ]);
    }
}
