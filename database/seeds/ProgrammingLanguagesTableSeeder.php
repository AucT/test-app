<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgrammingLanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programming_languages')->delete();


        DB::table('programming_languages')->insert([
            ['name' => 'php'],
            ['name' => 'javascript'],
            ['name' => 'java'],
            ['name' => 'kotlin'],
            ['name' => 'fsharp'],
        ]);

    }
}
