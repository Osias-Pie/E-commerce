<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/catalogue'; // <-- Change ici pour ta redirection

    /**
     * Define your route model bindings, pattern filters, etc.
     */
    public function boot(): void
    {
        $this->routes(function () {
            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::prefix('api')
                ->middleware('api')
                ->group(base_path('routes/api.php'));
        });

        // Redirection dynamique après login
    $this->redirectTo = function () {
        if (Auth::check()) {
            // Si Admin (par exemple, role = admin)
            if (Auth::user()->role === 'admin') {
                return '/dashboard';
            } else {
                return '/catalogue';
            }
        }

        return '/catalogue'; // Default
        };
    }
}
