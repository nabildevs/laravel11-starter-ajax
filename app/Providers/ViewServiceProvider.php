<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        View::share('default_image', asset('images/no_image.jpg'));

        View::composer('*', function ($view) {
            $view->with([
                'setting' => Setting::first()
            ]);
        });
    }
}
