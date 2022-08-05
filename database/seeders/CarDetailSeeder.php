<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CarDetail;

class CarDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $car_details = [
            [
                'car_id' => 1,
                'vehicle_type' => 'Pickup',
                'color' => 'Blue',
                'price' => '87568757654',
            ],
            [
                'car_id' => 2,
                'vehicle_type' => ':Pickup',
                'color' => 'Black',
                'price' => '576876765',
            ],
        ];
        foreach($car_details as $cd) {
            CarDetail::create($cd);
        }
    }
}
