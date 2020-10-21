<?php
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
         // TODO: UserSeederをTodoTableSeederに変更する 
         // $this->call(UserSeeder::class);
         $this->call(TodoTableSeeder::class);
    }
}
