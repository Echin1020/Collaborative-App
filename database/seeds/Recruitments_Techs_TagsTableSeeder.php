<?php

use Illuminate\Database\Seeder;

class Recruitments_Techs_TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recruitments_techs_tags')->insert([
            [
                'recruitment_id' => 1,
                'tech_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'recruitment_id' => 1,
                'tech_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'recruitment_id' => 1,
                'tech_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'recruitment_id' => 2,
                'tech_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'recruitment_id' => 2,
                'tech_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'recruitment_id' => 2,
                'tech_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'recruitment_id' => 3,
                'tech_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'recruitment_id' => 3,
                'tech_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'recruitment_id' => 3,
                'tech_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'recruitment_id' => 4,
                'tech_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'recruitment_id' => 4,
                'tech_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'recruitment_id' => 4,
                'tech_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'recruitment_id' => 5,
                'tech_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'recruitment_id' => 5,
                'tech_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'recruitment_id' => 5,
                'tech_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
