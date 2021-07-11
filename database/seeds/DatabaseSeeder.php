<?php

use App\Recruitment;
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
        $this->call(UsersTableSeeder::class);
        $this->call(TechsTableSeeder::class);
        $this->call(Users_Techs_TagsTableSeeder::class);
        $this->call(RecruitmentsTableSeeder::class);
        $this->call(Recruitments_Techs_TagsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
    }
}