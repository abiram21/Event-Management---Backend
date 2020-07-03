<?php

use Illuminate\Database\Seeder;

class FacilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $facilities = [
            [
                'type' => 'Food'
            ],
            [
                'type' => 'Chair'
            ],
            [
                'type' => 'HallCover'
            ],
            [
                'type' => 'Light'
            ],
            [
                'type' => 'Memorials'
            ],
            [
                'type' => 'Photography'
            ],
            [
                'type' => 'ShortEats'
            ],
            [
                'type' => 'Sound'
            ]
            ];
            foreach($facilities as $facility)
            {
                App\Facility::create($facility);
            }
    }
}
