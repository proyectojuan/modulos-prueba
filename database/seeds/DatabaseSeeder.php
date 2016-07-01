<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TableUsers::class);
        $this->call(TableEvents::class);
        $this->call(TableCategories::class);
        $this->call(TableProducts::class);
    }
}
