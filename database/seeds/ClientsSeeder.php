<?php

use Illuminate\Database\Seeder;

use App\Client;
use Carbon\Carbon;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i = 1; $i <= 12; $i++) {
            $client = new Client();
            $client->name = 'Client '.$i;
            $client->image_url = '/images/theoroque-logo.png';
            $client->client_at = Carbon::now();
            $client->testimonial = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.';
            $client->save();
	    }
    }
}
