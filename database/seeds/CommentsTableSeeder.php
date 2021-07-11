<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("comments")->insert([
            [
                "user_id" => 1,
                "recruitment_id" => 1,
                "comment" => "分かった。",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "user_id" => 2,
                "recruitment_id" => 2,
                "comment" => "分かりやすい。",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "user_id" => 3,
                "recruitment_id" => 3,
                "comment" => "ふつう。",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "user_id" => 4,
                "recruitment_id" => 4,
                "comment" => "分かりにくい。",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "user_id" => 5,
                "recruitment_id" => 5,
                "comment" => "分からん。",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
