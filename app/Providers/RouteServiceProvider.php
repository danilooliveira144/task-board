<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Define o "home" da aplicação (opcional).
     */
    public const HOME = '/';

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Rate limit padrão para API
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        // CARREGAMENTO DAS ROTAS WEB
        Route::middleware('web')
            ->group(base_path('routes/web.php'));

        // CARREGAMENTO DAS ROTAS API (ESSENCIAL PARA SEU CASO)
        Route::prefix('api')
            ->middleware('api')
            ->group(base_path('routes/api.php'));
    }
}