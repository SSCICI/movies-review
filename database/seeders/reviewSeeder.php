<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class reviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
                'title' => 'タイトル',
                'body' => '本文やでぇ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        //
    }
}
