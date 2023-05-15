<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        view()->composer('inc.navbar', function ($view) {
            $result = DB::table('dicts')
                ->select(
                    DB::raw('COUNT(*) as total_rows'),
                    DB::raw('SUM(CASE WHEN is_favorite = true THEN 1 ELSE 0 END) as favorite_rows')
                )
                ->first();
            $view->with('rows', $result);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
