<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Provider;
use App\Models\Service;
use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    public function run()
    {
        //canada 2 provider for one service
        $providers = [
            // Plumbing Providers
            [
                'name' => 'Downtown Plumbing Services',
                'service_id' => Service::where('name', 'Plumbing')->first()->id,
                'latitude' => 45.5045,
                'longitude' => -73.5669,
                'price' => 1550.00,
                'address' => 'Crescent St, Montreal, QC'
            ],
            [
                'name' => 'Montreal Pipe Experts',
                'service_id' => Service::where('name', 'Plumbing')->first()->id,
                'latitude' => 45.5065,
                'longitude' => -73.5704,
                'price' => 1600.00,
                'address' => 'St Denis St, Montreal, QC'
            ],

            // Electrical Providers
            [
                'name' => 'Montreal Electrical Experts',
                'service_id' => Service::where('name', 'Electrical')->first()->id,
                'latitude' => 45.5059,
                'longitude' => -73.5701,
                'price' => 1800.00,
                'address' => 'Bishop St, Montreal, QC'
            ],
            [
                'name' => 'Electricians Montreal',
                'service_id' => Service::where('name', 'Electrical')->first()->id,
                'latitude' => 45.5043,
                'longitude' => -73.5727,
                'price' => 1750.00,
                'address' => 'Sherbrooke St W, Montreal, QC'
            ],

            // House Cleaning Providers
            [
                'name' => 'Pro Clean Montreal',
                'service_id' => Service::where('name', 'House Cleaning')->first()->id,
                'latitude' => 45.5070,
                'longitude' => -73.5735,
                'price' => 1250.00,
                'address' => 'St Catherine St W, Montreal, QC'
            ],
            [
                'name' => 'Montreal Clean Team',
                'service_id' => Service::where('name', 'House Cleaning')->first()->id,
                'latitude' => 45.5090,
                'longitude' => -73.5761,
                'price' => 1300.00,
                'address' => 'Papineau Ave, Montreal, QC'
            ],

            // Carpentry Providers
            [
                'name' => 'Montreal Carpentry Co.',
                'service_id' => Service::where('name', 'Carpentry')->first()->id,
                'latitude' => 45.5018,
                'longitude' => -73.5657,
                'price' => 2100.00,
                'address' => 'Sherbrooke St W, Montreal, QC'
            ],
            [
                'name' => 'Quality Woodwork Montreal',
                'service_id' => Service::where('name', 'Carpentry')->first()->id,
                'latitude' => 45.5005,
                'longitude' => -73.5689,
                'price' => 2200.00,
                'address' => 'St Laurent Blvd, Montreal, QC'
            ],

            // Lawn Care Providers
            [
                'name' => 'Verdant Lawn Care',
                'service_id' => Service::where('name', 'Lawn Care')->first()->id,
                'latitude' => 45.4989,
                'longitude' => -73.5732,
                'price' => 1100.00,
                'address' => 'Milton St, Montreal, QC'
            ],
            [
                'name' => 'Montreal Lawn Masters',
                'service_id' => Service::where('name', 'Lawn Care')->first()->id,
                'latitude' => 45.4997,
                'longitude' => -73.5704,
                'price' => 1200.00,
                'address' => 'Lorne St, Montreal, QC'
            ],

            // Painting Providers
            [
                'name' => 'Artisan Painters',
                'service_id' => Service::where('name', 'Painting')->first()->id,
                'latitude' => 45.5060,
                'longitude' => -73.5651,
                'price' => 2250.00,
                'address' => 'Ontario St W, Montreal, QC'
            ],
            [
                'name' => 'Montreal Painters',
                'service_id' => Service::where('name', 'Painting')->first()->id,
                'latitude' => 45.5073,
                'longitude' => -73.5680,
                'price' => 2300.00,
                'address' => 'Richelieu St, Montreal, QC'
            ],

            // Renovation Providers
            [
                'name' => 'Home Renovation Montreal',
                'service_id' => Service::where('name', 'Renovation')->first()->id,
                'latitude' => 45.5082,
                'longitude' => -73.5694,
                'price' => 2850.00,
                'address' => 'Clark St, Montreal, QC'
            ],
            [
                'name' => 'Renovation Masters Montreal',
                'service_id' => Service::where('name', 'Renovation')->first()->id,
                'latitude' => 45.5100,
                'longitude' => -73.5725,
                'price' => 2900.00,
                'address' => 'St Denis St, Montreal, QC'
            ],

            // HVAC Providers
            [
                'name' => 'HVAC Montreal Solutions',
                'service_id' => Service::where('name', 'HVAC')->first()->id,
                'latitude' => 45.5021,
                'longitude' => -73.5784,
                'price' => 3100.00,
                'address' => 'Jeanne-Mance St, Montreal, QC'
            ],
            [
                'name' => 'Montreal Climate Control',
                'service_id' => Service::where('name', 'HVAC')->first()->id,
                'latitude' => 45.5043,
                'longitude' => -73.5760,
                'price' => 3200.00,
                'address' => 'St Laurent Blvd, Montreal, QC'
            ],

            // Roofing Providers
            [
                'name' => 'Roofing Pros',
                'service_id' => Service::where('name', 'Roofing')->first()->id,
                'latitude' => 45.4974,
                'longitude' => -73.5729,
                'price' => 2600.00,
                'address' => 'Prince Arthur St, Montreal, QC'
            ],
            [
                'name' => 'Montreal Roofing Services',
                'service_id' => Service::where('name', 'Roofing')->first()->id,
                'latitude' => 45.4957,
                'longitude' => -73.5742,
                'price' => 2700.00,
                'address' => 'Saint-Viateur St, Montreal, QC'
            ],

            // Locksmith Providers
            [
                'name' => 'Secure Locksmiths Montreal',
                'service_id' => Service::where('name', 'Locksmith')->first()->id,
                'latitude' => 45.5040,
                'longitude' => -73.5617,
                'price' => 850.00,
                'address' => 'St Urbain St, Montreal, QC'
            ],
            [
                'name' => 'Lockout Experts Montreal',
                'service_id' => Service::where('name', 'Locksmith')->first()->id,
                'latitude' => 45.5051,
                'longitude' => -73.5632,
                'price' => 900.00,
                'address' => 'Bleury St, Montreal, QC'
            ]
        ];

        foreach ($providers as $provider) {
            Provider::create($provider);
        }
    }
}

