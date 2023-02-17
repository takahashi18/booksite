<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use datetime;


class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'author' => '東野圭吾',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('authors')->insert([
            'author' => '高瀬隼子',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('authors')->insert([
            'author' => '有川浩',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('authors')->insert([
            'author' => '伊坂幸太郎',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('authors')->insert([
            'author' => '湊かなえ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('authors')->insert([
            'author' => '池井戸潤',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('authors')->insert([
            'author' => '宮部みゆき',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('authors')->insert([
            'author' => '村田沙耶香',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('authors')->insert([
            'author' => '住野よる',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('authors')->insert([
            'author' => '朝井リョウ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('authors')->insert([
            'author' => '最果タヒ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);

        DB::table('authors')->insert([
            'author' => '角田光代',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deleted_at' => new DateTime(),
        ]);
    }
}