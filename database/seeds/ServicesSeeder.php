<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = new Service();
        $service->name = 'Infrastructure Supplies';
        $service->image_url = '/images/services/service-1.jpg';
        $service->description = 'We supply trusted products to the largest infrastructure projects in the Philippines.
        Through our wholesale partnership we have access to 200,000 products from over 600 well-respected brands and manufacturers.
        Browse our online catalog and contact us for pricing.';
        $service->save();

        $service = new Service();
        $service->name = 'Municipal Equipments';
        $service->image_url = '/images/services/service-2.jpg';
        $service->description = 'JNKRR is a dealer for vacuum trucks, sewer cameras, municipal tractors, and street sweepers.';
        $service->save();
    }
}
