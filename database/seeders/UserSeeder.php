<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
            'name' => 'lincoln',
            'email' => 'lincoln@gmail.com',
            'password' => Hash::make('lincoln1234'),
        ]);
        DB::table('users')->insert([
            'name' => 'andy',
            'email' => 'andy@gmail.com',
            'password' => Hash::make('andy1234'),
        ]);
        DB::table('personal_access_tokens')->insert([
            'tokenable_type' => 'App\Models\User',
            'tokenable_id' => '1',
            'name' => 'auth_token',
            'token' => '29f3e59b638f9c212427a7d5a3636ce640f3f759ffea59a71a9991566e564059',
            'abilities' => '["*"]'
        ]);
    }
}
