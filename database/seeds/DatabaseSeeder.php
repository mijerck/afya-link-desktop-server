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
        // $this->call('UsersTableSeeder');
        $this->call(PatientsTableSeeder::class);
        $this->call(InventoriesTableSeeder::class);
        $this->call(InvoiceItemsTableSeeder::class);
    }
}
