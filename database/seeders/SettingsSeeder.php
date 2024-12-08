<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            "site_name" => 'news-app',
            "fav_icon" => 'default',
            "logo" => 'default',
            "facebook" => 'https://fb.com',
            "twitter" => 'default',
            "youtube" => 'default',
            "street" => 'default',
            "city" => 'default',
            "country" => 'default',
            "email" => 'araby@app.com',
            "phone" => '01010301346',
        ]);
    }
}
