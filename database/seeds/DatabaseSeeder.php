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
        $this->call(FunctionsTableSeeder::class);
        $this->call(FacilitiesTableSeeder::class);
        $this->call(ClientTableSeeder::class);
		$this->call(SoundTableSeeder::class);
		$this->call(LightTableSeeder::class);
		$this->call(FoodTableSeeder::class);
		// $this->call(ShorteatTableSeeder::class);
		//$this->call(ChairTableSeeder::class);
		// $this->call(MemorialTableSeeder::class);
		$this->call(PhotographyTableSeeder::class);
		$this->call(HallcoverTableSeeder::class);
    }
}
