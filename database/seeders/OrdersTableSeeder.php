<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;


class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders') ->insert([
            'user_id' => '1',
            'book_id' => '2',
            'quantity' => '1',
            'delivery_at' => '20230304',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('orders') ->insert([
            'user_id' => '1',
            'book_id' => '4',
            'quantity' => '2',
            'delivery_at' => '20230305',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('orders') ->insert([
            'user_id' => '1',
            'book_id' => '6',
            'quantity' => '1',
            'delivery_at' => '20230306',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('orders') ->insert([
            'user_id' => '2',
            'book_id' => '22',
            'quantity' => '3',
            'delivery_at' => '20230303',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('orders') ->insert([
            'user_id' => '2',
            'book_id' => '24',
            'quantity' => '2',
            'delivery_at' => '20230304',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('orders') ->insert([
            'user_id' => '3',
            'book_id' => '30',
            'quantity' => '2',
            'delivery_at' => '20230305',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('orders') ->insert([
            'user_id' => '4',
            'book_id' => '34',
            'quantity' => '4',
            'delivery_at' => '20230305',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

    }
}