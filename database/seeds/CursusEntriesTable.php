<?php

use Illuminate\Database\Seeder;

class CursusEntriesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\CursusEntry::create([
            'title' => 'Title placeholder',
            'content' => 'Content placeholder',
        ]);
    }
}
