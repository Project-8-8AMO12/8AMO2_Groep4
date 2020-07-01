<?php

use Illuminate\Database\Seeder;

class BijenstalContentsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\BijenstalContent::create([
            'title1' => 'De imkervereniging De bijenstal',
            'section1' => 'De bijenstal in polderpark Cronesteyn is geopend op de eerste zondag van de maand vanaf begin april tot eind september, van 14h00 tot 15h00. Voor iedereen die een kijkje in de kast wil nemen. In de bijenstal worden ook de praktijk lessen van de basiscursus gegeven.',
        ]);
    }
}
