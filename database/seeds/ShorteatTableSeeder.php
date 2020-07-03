<?php

use Illuminate\Database\Seeder;

class ShorteatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$shorteats=[
		[
		'type'=>'rolls',
		'minQty'=>1,
		'maxQty'=>200,
		'unit_price'=>30,
		'client_id'=>14,
		'fac_id'=>7
		],
		
		[
		'type'=>'rolls',
		'minQty'=>200,
		'maxQty'=>400,
		'unit_price'=>25,
		'client_id'=>14,
		'fac_id'=>7
		],
		[
		'type'=>'rolls',
		'minQty'=>400,
		'maxQty'=>600,
		'unit_price'=>20,
		'client_id'=>14,
		'fac_id'=>7
		],
		[
		'type'=>'rolls',
		'minQty'=>600,
		'maxQty'=>10000,
		'unit_price'=>15,
		'client_id'=>14,
		'fac_id'=>7
		],
		[
		'type'=>'vadai',
		'minQty'=>0,
		'maxQty'=>200,
		'unit_price'=>30,
		'client_id'=>14,
		'fac_id'=>7
		],
		[
		'type'=>'vadai',
		'minQty'=>200,
		'maxQty'=>400,
		'unit_price'=>25,
		'client_id'=>14,
		'fac_id'=>7
		],
		[
		'type'=>'vadai',
		'minQty'=>400,
		'maxQty'=>600,
		'unit_price'=>20,
		'client_id'=>14,
		'fac_id'=>7
		],
		[
		'type'=>'vadai',
		'minQty'=>600,
		'maxQty'=>10000,
		'unit_price'=>15,
		'client_id'=>14,
		'fac_id'=>7
		],
		// [
		// 'type'=>'MiloMilk ',
		// 'minQty'=>0,
		// 'maxQty'=>200,
		// 'unit_price'=>55,
		// 'client_id'=>14,
		// 'fac_id'=>7
		// ],
		// [
		// 'type'=>'MiloMilk ',
		// 'minQty'=>200,
		// 'maxQty'=>400,
		// 'unit_price'=>45,
		// 'client_id'=>14,
		// 'fac_id'=>7
		// ],
		// [
		// 'type'=>'MiloMilk ',
		// 'minQty'=>400,
		// 'maxQty'=>600,
		// 'unit_price'=>35,
		// 'client_id'=>14,
		// 'fac_id'=>7
		// ],
		// [
		// 'type'=>'MiloMilk ',
		// 'minQty'=>600,
		// 'maxQty'=>10000,
		// 'unit_price'=>30,
		// 'client_id'=>14,
		// 'fac_id'=>7
		// ],
		[
		'type'=>'HighlandMilk ',
		'minQty'=>0,
		'maxQty'=>200,
		'unit_price'=>35,
		'client_id'=>14,
		'fac_id'=>7
		],
		[
		'type'=>'HighlandMilk ',
		'minQty'=>200,
		'maxQty'=>400,
		'unit_price'=>30,
		'client_id'=>14,
		'fac_id'=>7
		],
		[
		'type'=>'HighlandMilk ',
		'minQty'=>400,
		'maxQty'=>600,
		'unit_price'=>25,
		'client_id'=>14,
		'fac_id'=>7
		],
		[
		'type'=>'HighlandMilk ',
		'minQty'=>600,
		'maxQty'=>10000,
		'unit_price'=>20,
		'client_id'=>14,
		'fac_id'=>7
		],
		[
		'type'=>'WaterBottle',
		'minQty'=>0,
		'maxQty'=>200,
		'unit_price'=>50,
		'client_id'=>14,
		'fac_id'=>7
		],
		[
		'type'=>'WaterBottle',
		'minQty'=>200,
		'maxQty'=>400,
		'unit_price'=>40,
		'client_id'=>14,
		'fac_id'=>7
		],
		[
		'type'=>'WaterBottle',
		'minQty'=>400,
		'maxQty'=>600,
		'unit_price'=>35,
		'client_id'=>14,
		'fac_id'=>7
		],
		[
		'type'=>'WaterBottle',
		'minQty'=>600,
		'maxQty'=>10000,
		'unit_price'=>30,
		'client_id'=>14,
		'fac_id'=>7
		],                      
		
		[
		'type'=>'rolls',
		'minQty'=>0,
		'maxQty'=>200,
		'unit_price'=>25,
		'client_id'=>15,
		'fac_id'=>7
		],
		
		[
		'type'=>'rolls',
		'minQty'=>200,
		'maxQty'=>400,
		'unit_price'=>20,
		'client_id'=>15,
		'fac_id'=>7
		],
		[
		'type'=>'rolls',
		'minQty'=>400,
		'maxQty'=>600,
		'unit_price'=>15,
		'client_id'=>15,
		'fac_id'=>7
		],
		[
		'type'=>'rolls',
		'minQty'=>600,
		'maxQty'=>10000,
		'unit_price'=>12,
		'client_id'=>15,
		'fac_id'=>7
		],
		[
		'type'=>'vadai',
		'minQty'=>0,
		'maxQty'=>200,
		'unit_price'=>25,
		'client_id'=>15,
		'fac_id'=>7
		],
		[
		'type'=>'vadai',
		'minQty'=>200,
		'maxQty'=>400,
		'unit_price'=>20,
		'client_id'=>15,
		'fac_id'=>7
		],
		[
		'type'=>'vadai',
		'minQty'=>400,
		'maxQty'=>600,
		'unit_price'=>15,
		'client_id'=>15,
		'fac_id'=>7
		],
		[
		'type'=>'vadai',
		'minQty'=>600,
		'maxQty'=>10000,
		'unit_price'=>12,
		'client_id'=>15,
		'fac_id'=>7
		],
		[
		'type'=>'MiloMilk ',
		'minQty'=>0,
		'maxQty'=>200,
		'unit_price'=>50,
		'client_id'=>15,
		'fac_id'=>7
		],
		[
		'type'=>'MiloMilk ',
		'minQty'=>200,
		'maxQty'=>400,
		'unit_price'=>45,
		'client_id'=>15,
		'fac_id'=>7
		],
		[
		'type'=>'MiloMilk ',
		'minQty'=>400,
		'maxQty'=>600,
		'unit_price'=>40,
		'client_id'=>15,
		'fac_id'=>7
		],
		[
		'type>MiloMilk ',
		'minQty'=>600,
		'maxQty'=>10000,
		'unit_price'=>35,
		'client_id'=>15,
		'fac_id'=>7
		],
		[
		'type'=>'HighlandMilk ',
		'minQty'=>0,
		'maxQty'=>200,
		'unit_price'=>30,
		'client_id'=>15,
		'fac_id'=>7
		],
		[
		'type'=>'HighlandMilk ',
		'minQty'=>200,
		'maxQty'=>400,
		'unit_price'=>25,
		'client_id'=>15,
		'fac_id'=>7
		],
		[
		'type'=>'HighlandMilk ',
		'minQty'=>400,
		'maxQty'=>600,
		'unit_price'=>20,
		'client_id'=>15,
		'fac_id'=>7
		],
		[
		'type'=>'HighlandMilk ',
		'minQty'=>600,
		'maxQty'=>10000,
		'unit_price'=>15,
		'client_id'=>15,
		'fac_id'=>7
		],
		[
		'type'=>'WaterBottle',
		'minQty'=>0,
		'maxQty'=>200,
		'unit_price'=>70,
		'client_id'=>15,
		'fac_id'=>7
		],
		[
		'type'=>'WaterBottle',
		'minQty'=>200,
		'maxQty'=>400,
		'unit_price'=>60,
		'client_id'=>15,
		'fac_id'=>7
		],
		[
		'type'=>'WaterBottle',
		'minQty'=>400,
		'maxQty'=>600,
		'unit_price'=>50,
		'client_id'=>15,
		'fac_id'=>7
		],
		[
		'type'=>'WaterBottle',
		'minQty'=>600,
		'maxQty'=>10000,
		'unit_price'=>40,
		'client_id'=>15,
		'fac_id'=>7
		],      
		
		[
		'type'=>'rolls',
		'minQty'=>0,
		'maxQty'=>300,
		'unit_price'=>30,
		'client_id'=>16,
		'fac_id'=>7
		],
		
		[
		'type'=>'rolls',
		'minQty'=>300,
		'maxQty'=>600,
		'unit_price'=>.25,
		'client_id'=>16,
		'fac_id'=>7
		],
		[
		'type'=>'rolls',
		'minQty'=>600,
		'maxQty'=>10000,
		'unit_price'=>20,
		'client_id'=>16,
		'fac_id'=>7
		],
		
		[
		'type'=>'vadai',
		'minQty'=>0,
		'maxQty'=>300,
		'unit_price'=>20,
		'client_id'=>16,
		'fac_id'=>7
		],
		[
		'type'=>'vadai',
		'minQty'=>300,
		'maxQty'=>600,
		'unit_price'=>15,
		'client_id'=>16,
		'fac_id'=>7
		],
		[
		'type'=>'vadai',
		'minQty'=>600,
		'maxQty'=>10000,
		'unit_price'=>12,
		'client_id'=>16,
		'fac_id'=>7
		],
		
		[
		'type'=>'MiloMilk ',
		'minQty'=>0,
		'maxQty'=>300,
		'unit_price'>50,
		'client_id'=>16,
		'fac_id'=>7
		],
		[
		'type'=>'MiloMilk ',
		'minQty'=>300,
		'maxQty'=>600,
		'unit_price'=>40,
		'client_id'=>16,
		'fac_id'=>7
		],
		[
		'type'=>'MiloMilk ',
		'minQty'=>600,
		'maxQty'=>10000,
		'unit_price'=>30,
		'client_id'=>16,
		'fac_id'=>7
		],
		
		[
		'type'=>'HighlandMilk ',
		'minQty'=>0,
		'maxQty'=>300,
		'unit_price'=>35,
		'client_id'=>16,
		'fac_id'=>7
		],
		[
		'type'=>'HighlandMilk ',
		'minQty'=>300,
		'maxQty'=>600,
		'unit_price'=>30,
		'client_id'=>16,
		'fac_id'=>7
		],
		[
		'type'=>'HighlandMilk ',
		'minQty'=>600,
		'maxQty'=>10000,
		'unit_price'=>20,
		'client_id'=>16,
		'fac_id'=>7
		],
		
		[
		'type'=>'WaterBottle',
		'minQty'=>0,
		'maxQty'=>300,
		'unit_price'=>60,
		'client_id'=>16,
		'fac_id'=>7
		],
		[
		'type'=>'WaterBottle',
		'minQty'=>300,
		'maxQty'=>600,
		'unit_price'=>50,
		'client_id'=>16,
		'fac_id'=>7
		],
		[
		'type'=>'WaterBottle',
		'minQty'=>600,
		'maxQty'=>10000,
		'unit_price'=>40,
		'client_id'=>16,
		'fac_id'=>7
		],                             
		
		[
		'type'=>'rolls',
		'minQty'=>0,
		'maxQty'=>250,
		'unit_price'=>30,
		'client_id'=>17,
		'fac_id'=>7
		],
		
		[
		'type'=>'rolls',
		'minQty'=>250,
		'maxQty'=>500,
		'unit_price'=>.20,
		'client_id'=>17,
		'fac_id'=>7
		],
		[
		'type'=>'rolls',
		'minQty'=>500,
		'maxQty'=>750,
		'unit_price'=>15,
		'client_id'=>17,
		'fac_id'=>7
		],
		[
		'type'=>'rolls',
		'minQty'=>750,
		'maxQty'=>10000,
		'unit_price'=>12,
		'client_id'=>17,
		'fac_id'=>7
		],
		[
		'type'=>'vadai',
		'minQty'=>0,
		'maxQty'=>250,
		'unit_price'=>30,
		'client_id'=>17,
		'fac_id'=>7
		],
		[
		'type'=>'vadai',
		'minQty'=>250,
		'maxQty'=>500,
		'unit_price'=>28,
		'client_id'=>17,
		'fac_id'=>7
		],
		[
		'type'=>'vadai',
		'minQty'=>500,
		'maxQty'=>750,
		'unit_price'=>25,
		'client_id'=>17,
		'fac_id'=>7
		],
		[
		'type'=>'vadai',
		'minQty'=>750,
		'maxQty'=>10000,
		'unit_price'=>20,
		'client_id'=>17,
		'fac_id'=>7
		],
		[
		'type'=>'MiloMilk ',
		'minQty'=>0,
		'maxQty'=>250,
		'unit_price'=>55,
		'client_id'=>17,
		'fac_id'=>7
		],
		[
		'type'=>'MiloMilk ',
		'minQty'=>250,
		'maxQty'=>500,
		'unit_price'=>50,
		'client_id'=>17,
		'fac_id'=>7
		],
		[
		'type'=>'MiloMilk ',
		'minQty'=>500,
		'maxQty'=>750,
		'unit_price'=>45,
		'client_id'=>17,
		'fac_id'=>7
		],
		[
		'type'=>'MiloMilk ',
		'minQty'=>750,
		'maxQty'=>10000,
		'unit_price'=>40,
		'client_id'=>17,
		'fac_id'=>7
		],
		[
		'type'=>'HighlandMilk ',
		'minQty'=>0,
		'maxQty'=>250,
		'unit_price'=>30,
		'client_id'=>17,
		'fac_id'=>7
		],
		[
		'type'=>'HighlandMilk ',
		'minQty'=>250,
		'maxQty'=>500,
		'unit_price'=>20,
		'client_id'=>17,
		'fac_id'=>7
		],
		[
		'type'=>'HighlandMilk ',
		'minQty'=>500,
		'maxQty'=>750,
		'unit_price'=>15,
		'client_id'=>17,
		'fac_id'=>7
		],
		[
		'type'=>'HighlandMilk ',
		'minQty'=>750,
		'maxQty'=>10000,
		'unit_price'=>12,
		'client_id'=>17,
		'fac_id'=>7
		],
		[
		'type'=>'WaterBottle',
		'minQty'=>0,
		'maxQty'=>250,
		'unit_price'=>100,
		'client_id'=>17,
		'fac_id'=>7
		],
		[
		'type'=>'WaterBottle',
		'minQty'=>250,
		'maxQty'=>500,
		'unit_price'=>80,
		'client_id'=>17,
		'fac_id'=>7
		],
		[
		'type'=>'WaterBottle',
		'minQty'=>500,
		'maxQty'=>750,
		'unit_price'=>70,
		'client_id'=>17,
		'fac_id'=>7
		],
		[
		'type'=>'WaterBottle',
		'minQty'=>750,
		'maxQty'=>10000,
		'unit_price'=>60,
		'client_id'=>17,
		'fac_id'=>7
		],                                 
		[
		'type'=>'rolls',
		'minQty'=>0,
		'maxQty'=>300,
		'unit_price'=>30,
		'client_id'=>18,
		'fac_id'=>7
		],
		
		[
		'type'=>'rolls',
		'minQty'=>300,
		'maxQty'=>600,
		'unit_price'=>25,
		'client_id'=>18,
		'fac_id'=>7
		],
		[
		'type'=>'rolls',
		'minQty'=>600,
		'maxQty'=>900,
		'unit_price'=>20,
		'client_id'=>18,
		'fac_id'=>7
		],
		[
		'type'=>'rolls',
		'minQty'=>900,
		'maxQty'=>10000,
		'unit_price'=>15,
		'client_id'=>18,
		'fac_id'=>7
		],
		[
		'type'=>'vadai',
		'minQty'=>0,
		'maxQty'=>300,
		'unit_price'=>25,
		'client_id'=>18,
		'fac_id'=>7
		],
		[
		'type'=>'vadai',
		'minQty'=>300,
		'maxQty'=>600,
		'unit_price'=>22,
		'client_id'=>18,
		'fac_id'=>7
		],
		[
		'type'=>'vadai',
		'minQty'=>600,
		'maxQty'=>900,
		'unit_price'=>20,
		'client_id'=>18,
		'fac_id'=>7
		],
		[
		'type'=>'vadai',
		'minQty'=>900,
		'maxQty'=>10000,
		'unit_price'=>15,
		'client_id'=>18,
		'fac_id'=>7
		],
		// [
		// 'type'=>'MiloMilk ',
		// 'minQty'=>0,
		// 'maxQty'=>300,
		// 'unit_price'=>55,
		// 'client_id'=>18,
		// 'fac_id'=>7
		// ],
		// [
		// 'type'=>'MiloMilk ',
		// 'minQty'=>300,
		// 'maxQty'=>600,
		// 'unit_price'=>45,
		// 'client_id'=>18,
		// 'fac_id'=>7
		// ],
		// [
		// 'type'=>'MiloMilk ',
		// 'minQty'=>600,
		// 'maxQty'=>900,
		// 'unit_price'=>35,
		// 'client_id'=>18,
		// 'fac_id'=>7
		// ],
		// [
		// 'type'=>'MiloMilk ',
		// 'minQty'=>900,
		// 'maxQty'=>10000,
		// 'unit_price'=>30,
		// 'client_id'=>18,
		// 'fac_id'=>7
		// ],
		[
		'type'=>'HighlandMilk ',
		'minQty'=>0,
		'maxQty'=>300,
		'unit_price'=>35,
		'client_id'=>18,
		'fac_id'=>7
		],
		[
		'type'=>'HighlandMilk ',
		'minQty'=>300,
		'maxQty'=>600,
		'unit_price'=>30,
		'client_id'=>18,
		'fac_id'=>7
		],
		[
		'type'=>'HighlandMilk',
		'minQty'=>600,
		'maxQty'=>900,
		'unit_price'=>25,
		'client_id'=>18,
		'fac_id'=>7
		],
		[
		'type'=>'HighlandMilk',
		'minQty'=>900,
		'maxQty'=>10000,
		'unit_price'=>20,
		'client_id'=>18,
		'fac_id'=>7
		],
		[
		'type'=>'WaterBottle',
		'minQty'=>0,
		'maxQty'=>300,
		'unit_price'=>50,
		'client_id'=>18,
		'fac_id'=>7
		],
		[
		'type'=>'WaterBottle',
		'minQty'=>300,
		'maxQty'=>600,
		'unit_price'=>40,
		'client_id'=>18,
		'fac_id'=>7
		],
		[
		'type'=>'WaterBottle',
		'minQty'=>600,
		'maxQty'=>900,
		'unit_price'=>38,
		'client_id'=>18,
		'fac_id'=>7
		],
		[
		'type'=>'WaterBottle',
		'minQty'=>900,
		'maxQty'=>10000,
		'unit_price'=>33,
		'client_id'=>18,
		'fac_id'=>7
        ],
	];
		foreach($shorteats as $shorteat)
            {
                App\Shorteats::create($shorteat);
            }
    }
}
