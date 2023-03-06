<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users') -> insert([
            'name' => 'test01',
            'email' => 'test01@test.com',
            'password' => bcrypt('test0001'),
            'postal_num' => '1000100',
            'address' => '東京都大島町１',
            'tel_num' => '09010001234',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('users') -> insert([
            'name' => 'test02',
            'email' => 'test02@test.com',
            'password' => bcrypt('test0002'),
            'postal_num' => '1000102',
            'address' => '東京都大島町岡田２',
            'tel_num' => '09020001234',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('users') -> insert([
            'name' => 'test03',
            'email' => 'test03@test.com',
            'password' => bcrypt('test0003'),
            'postal_num' => '1000211',
            'address' => '東京都大島町差木地３',
            'tel_num' => '09030001234',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('users') -> insert([
            'name' => 'test04',
            'email' => 'test04@test.com',
            'password' => bcrypt('test0004'),
            'postal_num' => '1000103',
            'address' => '東京都大島町泉津４',
            'tel_num' => '09040001234',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
