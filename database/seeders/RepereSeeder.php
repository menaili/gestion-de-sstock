<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RepereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reperes')->insert([
            [
                'coderepere' => 1,
                'libelle' => 'Libelle 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'coderepere' => 2,
                'libelle' => 'Libelle 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
