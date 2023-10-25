<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\SystemInfo;
use App\Models\Message;
use App\Models\Review;
use App\Models\Order;
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
        
         $allMessageListCount = Message::where('status',0)->count();
         $allReviewListCount = Review::where('status',0)->count();
         $orderListCount = Order::whereNull('productType')->count();

        view()->share('systemDataAll', $systemDataAll);
        
        view()->share('allMessageListCount', $allMessageListCount);
        view()->share('allReviewListCount', $allReviewListCount);
        view()->share('orderListCount', $orderListCount);
    }
}
