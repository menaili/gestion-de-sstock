<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Article;
use Illuminate\Support\Facades\DB;


class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'codePN' => '123456',
            'typeMagasin' => 'ABC',
            'designation' => 'Sample Article 1',
            'stkMin' => 10,
            'stkMax' => 100,
            'stkActuel' => 50,
            'valeurActuel' => 500,
            'unitemesure' => 'pcs',
            'CUMP' => 20,
            'codesection' => 'XYZ',
        ]);

        DB::table('articles')->insert([
            'codePN' => '789012',
            'typeMagasin' => 'DEF',
            'designation' => 'Sample Article 2',
            'stkMin' => 5,
            'stkMax' => 50,
            'stkActuel' => 20,
            'valeurActuel' => 200,
            'unitemesure' => 'pcs',
            'CUMP' => 15,
            'codesection' => 'XYZ',
        ]);
    }
}
