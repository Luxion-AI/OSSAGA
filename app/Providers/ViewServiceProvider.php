<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Period;
use Illuminate\Support\Facades\Log;

class ViewServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer('*', function ($view) {
            try {
                $activePeriod = Cache::remember('active_period', now()->addHours(24), function () {
                    return Period::where('is_active', true)->first();
                });

                $view->with('activePeriod', $activePeriod);
            } catch (\Throwable $e) {
                Log::warning('ViewServiceProvider: Unable to load active period — ' . $e->getMessage());
                $view->with('activePeriod', null);
            }
        });
    }
}
