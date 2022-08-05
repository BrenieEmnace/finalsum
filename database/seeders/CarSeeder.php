<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = [
            [
                'brand' => 'Ford',
                'model' => 'Everest',
            ],

            [
                'brand' => 'Raptor',
                'model' => 'Ford',
            ],
        ];
        foreach($cars as $c) {
            Car::create($c);
        }
    }
}

