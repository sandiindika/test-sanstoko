<?php

namespace Modules\Shop\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ShopDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Model::unguard();
        // $this->call([]);
        $this->call(ProductTablesSeeder::class);
    }
}
