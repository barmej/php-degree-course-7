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
        factory(App\User::class, 20)->create();
        factory(App\Store::class, 10)->create();
        factory(App\Product::class, 40)->create();
        factory(App\Order::class, 70)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
