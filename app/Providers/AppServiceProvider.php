<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('image64', function ($attribute, $value, $parameters, $validator) {
            $image = base64_decode(explode(',', $value)[1]);
            $f = finfo_open();
            $mimeType = finfo_buffer($f, $image, FILEINFO_MIME_TYPE);
            if (in_array($mimeType, $parameters)) {
                return true;
            }
            return false;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
