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
        $this->call(ProductsSeeder::class);
        $this->call(ClientsSeeder::class);
        $this->call(ServicesSeeder::class);
    }
}
