<?php

use Illuminate\Database\Seeder;

class CursusContentsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\CursusContent::create([
            'section1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempor a lorem at bibendum. In hac habitasse platea dictumst. Phasellus feugiat elit vitae mi efficitur suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis porttitor lorem nec convallis dignissim. Maecenas molestie pretium tellus ut convallis. Mauris dictum eros vitae eros condimentum, sed efficitur ipsum aliquam. Vestibulum et congue justo. Proin ac mattis metus. Mauris nisl dolor, pellentesque eu urna ac, venenatis pretium nisi.',
            'section2' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempor a lorem at bibendum. In hac habitasse platea dictumst. Phasellus feugiat elit vitae mi efficitur suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis porttitor lorem nec convallis dignissim. Maecenas molestie pretium tellus ut convallis. Mauris dictum eros vitae eros condimentum, sed efficitur ipsum aliquam. Vestibulum et congue justo. Proin ac mattis metus. Mauris nisl dolor, pellentesque eu urna ac, venenatis pretium nisi.',
            'section3' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempor a lorem at bibendum. In hac habitasse platea dictumst. Phasellus feugiat elit vitae mi efficitur suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis porttitor lorem nec convallis dignissim. Maecenas molestie pretium tellus ut convallis. Mauris dictum eros vitae eros condimentum, sed efficitur ipsum aliquam. Vestibulum et congue justo. Proin ac mattis metus. Mauris nisl dolor, pellentesque eu urna ac, venenatis pretium nisi.',
        ]);
    }
}
