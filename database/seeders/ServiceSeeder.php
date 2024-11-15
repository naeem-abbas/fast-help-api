<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $services = [
            ['name' => 'Plumbing'],
            ['name' => 'Electrical'],
            ['name' => 'House Cleaning'],
            ['name' => 'Carpentry'],
            ['name' => 'Lawn Care'],
            ['name' => 'Painting'],
            ['name' => 'Renovation'],
            ['name' => 'HVAC'],
            ['name' => 'Roofing'],
            ['name' => 'Locksmith'],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
