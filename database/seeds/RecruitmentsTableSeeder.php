<?php

use Illuminate\Database\Seeder;

class RecruitmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recruitments')->insert([
            [
                'title' => 'Laravel開発者募集',
                'user_id' => 1,
                'tech_thumbnail_id' => 2,
                'summary' => 'Laravelを採用したアプリケーションの作成をしようと思っています！ソースコードはGitHubで管理します！よろしくお願いいたします。',
                'recruit_flag' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'React開発者募集',
                'user_id' => 2,
                'tech_thumbnail_id' => 4,
                'summary' => 'Reactを採用したアプリケーションの作成をしようと思っています！ソースコードはGitHubで管理します！よろしくお願いいたします。',
                'recruit_flag' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'PHP開発者募集',
                'user_id' => 3,
                'tech_thumbnail_id' => 1,
                'summary' => 'PHPを採用したアプリケーションの作成をしようと思っています！ソースコードはGitHubで管理します！よろしくお願いいたします。',
                'recruit_flag' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'JavaScript開発者募集',
                'user_id' => 4,
                'tech_thumbnail_id' => 3,
                'summary' => 'JavaScriptを採用したアプリケーションの作成をしようと思っています！ソースコードはGitHubで管理します！よろしくお願いいたします。',
                'recruit_flag' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Laravel開発者募集',
                'user_id' => 5,
                'tech_thumbnail_id' => 2,
                'summary' => 'Laravelを採用したアプリケーションの作成をしようと思っています！ソースコードはGitHubで管理します！よろしくお願いいたします。',
                'recruit_flag' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}