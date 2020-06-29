<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    protected $toTruncate = [
        'users',
        'homecontents',
        'aboutcontents',
        'cursuscontents',
        'cursusentries',
        'activiteitcontents',
        'nieuwscontents',
        'winkelcontents'
    ];

    public function run()
    {
        Model::unguard();

        foreach($this->toTruncate as $table) {
            DB::table($table)->truncate();
        }

        $this->call(UserTable::class);
        $this->call(HomeContentsTable::class);
        $this->call(AboutContentsTable::class);
        $this->call(ActiviteitContentsTable::class);
        $this->call(CursusContentsTable::class);
        $this->call(CursusEntriesTable::class);
        $this->call(NieuwsContentsTable::class);
        $this->call(WinkelContentsTable::class);

        Model::reguard();
    }

}
