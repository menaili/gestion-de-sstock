<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            [
                'codesection' => 1,
                'coderepere' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'codesection' => 2,
                'coderepere' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more section records as needed
        ]);
    }
}
