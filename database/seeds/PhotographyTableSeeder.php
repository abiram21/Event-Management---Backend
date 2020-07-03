<?php

use Illuminate\Database\Seeder;

class PhotographyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photographies = [
            [
                'duration' => 'Fullday',
                'price' => 30000,
                'fac_id' => 6,
                'client_id'=> 32,
                
            ],
			[
                'duration' => 'Halfday',
                'price' => 20000,
                'fac_id' => 6,
                'client_id'=> 32,
                
            ],
			 [
                'duration' => 'Fullday',
                'price' => 35000,
                'fac_id' => 6,
                'client_id'=> 33,
                
            ],
			[
                'duration' => 'Halfday',
                'price' => 25000,
                'fac_id' => 6,
                'client_id'=> 33,
                
            ],
			 [
                'duration' => 'Fullday',
                'price' => 15000,
                'fac_id' => 6,
                'client_id'=> 34,
                
            ],
			[
                'duration' => 'Halfday',
                'price' => 10000,
                'fac_id' => 6,
                'client_id'=> 34,
                
            ],
			 [
                'duration' => 'Fullday',
                'price' => 50000,
                'fac_id' => 6,
                'client_id'=> 35,
                
            ],
			[
                'duration' => 'Halfday',
                'price' => 30000,
                'fac_id' => 6,
                'client_id'=> 35,
                
            ],
			 [
                'duration' => 'Fullday',
                'price' => 42000,
                'fac_id' => 6,
                'client_id'=> 36,
                
            ],
			[
                'duration' => 'Halfday',
                'price' => 22000,
                'fac_id' => 6,
                'client_id'=> 36,
                
            ],
			 [
                'duration' => 'Fullday',
                'price' => 35000,
                'fac_id' => 6,
                'client_id'=> 37,
                
            ],
			[
                'duration' => 'Halfday',
                'price' => 12000,
                'fac_id' => 6,
                'client_id'=> 37,
                
            ],
			 [
                'duration' => 'Fullday',
                'price' => 58000,
                'fac_id' => 6,
                'client_id'=> 38,
                
            ],
			[
                'duration' => 'Halfday',
                'price' => 32000,
                'fac_id' => 6,
                'client_id'=> 38,
                
            ],
			 [
                'duration' => 'Fullday',
                'price' => 55000,
                'fac_id' => 6,
                'client_id'=> 39,
                
            ],
			[
                'duration' => 'Halfday',
                'price' => 29000,
                'fac_id' => 6,
                'client_id'=> 39,
                
            ],
			 [
                'duration' => 'Fullday',
                'price' => 80000,
                'fac_id' => 6,
                'client_id'=> 40,
                
            ],
			[
                'duration' => 'Halfday',
                'price' => 60000,
                'fac_id' => 6,
                'client_id'=> 40,
                
            ],
	];
			foreach($photographies as $photography)
            {
                App\Photography::create($photography);
            }
	}
}