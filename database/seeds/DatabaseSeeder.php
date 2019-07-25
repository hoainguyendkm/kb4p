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
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class, 150)->create();
        factory(App\Muctieu::class, 4)->create();
        factory(App\Gioitinh::class, 4)->create();
        factory(App\Honnhan::class, 4)->create();
        factory(App\Hocvan::class, 4)->create();
        factory(App\Diachi::class, 4)->create();
    }
}
