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
         $this->call(UserTable::class);
         $this->call(HomeContentsTable::class);
         $this->call(AboutContentsTable::class);
         $this->call(CursusContentsTable::class);
    }
}
