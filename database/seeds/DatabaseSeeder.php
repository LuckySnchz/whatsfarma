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
        
        $this->call(ProductosSeeder::class);
        $this->call(MujeresSeeder::class);
        $this->call(AdultosSeeder::class);
        $this->call(MarcasSeeder::class);
        $this->call(BucalesSeeder::class);
        $this->call(CorporalesSeeder::class);
        $this->call(CapilaresSeeder::class);
        $this->call(SalesSeeder::class);
        $this->call(SaleAmericanaSeeder::class);
        $this->call(CotoSeeder::class);
        $this->call(CarrefourSeeder::class);
        $this->call(WalmartSeeder::class);
        $this->call(CommerceSeeder::class);
        $this->call(LuckycartsSeeder::class);

    }
}
