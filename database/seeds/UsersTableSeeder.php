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
        factory(App\User::class, 1)->create(['level' => 'admin']);
        factory(App\User::class, 20)->create(['level' => 'seller']);
        factory(App\User::class, 10)->create(['level' => 'employee']);
    }
}
