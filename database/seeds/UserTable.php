<?php

use Illuminate\Database\Seeder;

class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'userrank' => '1',
            'username' => 'Christiaan',
            'password' => '$2y$10$gWM6IZt.LUwi6WnBE1dvse/Gc.K8gO9YOgLFzPKiTqUBcTr6gbCAe',
        ]);

        App\User::create([
            'userrank' => '1',
            'username' => 'Tim',
            'password' => '$2y$10$RgLOUCSea0QITBsZMiUIrukK93GUDeGMv8x6kthtAyQAsN2omDi1S',
        ]);

        App\User::create([
            'userrank' => '1',
            'username' => 'Noah',
            'password' => '$2y$10$qn.3ie2R3VmkzXbRyjTH4ulL2qXfAXBr.wCtbFl77e8pw8yeMZYbq',
        ]);

        App\User::create([
            'userrank' => '0',
            'username' => 'Beheerder_1',
            'password' => '$2y$10$YBR.5lTLQWUHHefOpK4wR.1mb6x5vQSs4MVorMEJ.Go42T0YWUwiu',
        ]);
    }
}
