<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainings')->insert([
            'title' => 'Training Laravel Bersama Taqim',
            'description' => 'Training macam mana nak master laravel dalam masa singkat',
            'trainer' => 'Taqim'
        ]);
    }
}
