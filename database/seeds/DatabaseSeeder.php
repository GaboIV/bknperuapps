<?php

use App\User;

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
        User::truncate();

        $cantidadUsuarios = 200;

        factory(User::class, $cantidadUsuarios)->create();
    }
}
