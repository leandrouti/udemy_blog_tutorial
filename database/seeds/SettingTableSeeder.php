<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        $settings = App\Setting::create([
            'site_name' => 'Laravel Blog',
            'contact_number' => '090-1233-11232424',
            'contact_email' => 'contact@email.com',
            'address' => 'Next avenue NY.'
        ]);
        
    }
}
