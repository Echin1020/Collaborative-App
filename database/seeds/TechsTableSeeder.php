<?php

use Illuminate\Database\Seeder;

class TechsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('techs')->insert([
            [
                'name' => 'PHP',
                'thumbnail' => 'XXX',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laravel',
                'thumbnail' => 'XXX',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'JavaScript',
                'thumbnail' => 'XXX',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'React',
                'thumbnail' => 'XXX',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'GitHub',
                'thumbnail' => 'XXX',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'C#',
                'thumbnail' => 'XXX',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
