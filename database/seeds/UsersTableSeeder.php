<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => '太郎',
                'email' => 'tarou@mail.com',
                'password' => Hash::make('taro12345'),
                'twitter_url' => 'https://twitter.com/Twitter?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '宮崎',
                'email' => 'miyazaki@mail.com',
                'password' => Hash::make('kimura12345'),
                'twitter_url' => 'https://twitter.com/Twitter?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '北村',
                'email' => 'kitamura@mail.com',
                'password' => Hash::make('kitamura12345'),
                'twitter_url' => 'https://twitter.com/Twitter?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '岡田',
                'email' => 'okada@mail.com',
                'password' => Hash::make('okada12345'),
                'twitter_url' => 'https://twitter.com/Twitter?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '大月',
                'email' => 'ootuki@mail.com',
                'password' => Hash::make('ootuki12345'),
                'twitter_url' => 'https://twitter.com/Twitter?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
