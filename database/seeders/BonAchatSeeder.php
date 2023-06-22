<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BonAchatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bon_achats')->insert([
            'numBA' => 123456, // Example value
            'dateBA' => '2023-05-22', // Example value
            'typeAchat' => 'Example typeAchat',
            'tauxchange' => 123456789, // Example value
            'valeurOR' => 987654321, // Example value
            'fraisApproche' => 987654321, // Example value
            'codeMoney' => 'Example codeMoney',
            'numcmd' => 654321, // Example value
            'datecmd' => '2023-05-22', // Example value
            'codefacture' => 123456, // Example value
            'datefacture' => '2023-05-22', // Example value
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
