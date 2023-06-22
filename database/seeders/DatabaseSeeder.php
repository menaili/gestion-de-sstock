<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use http\Env\Request;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            RepereSeeder::class,
            SectionSeeder::class,
            BonAchatSeeder::class,
            ArticleSeeder::class
        ]);
    }
}
