<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class SettingsProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Setting::firstOr(function() {
            return Setting::create([
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
        });
    }
}
