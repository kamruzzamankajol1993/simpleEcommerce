<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\SystemInfo;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $systemDataAll = SystemInfo::latest()->first();

        view()->share('systemDataAll', $systemDataAll);
    }
}
