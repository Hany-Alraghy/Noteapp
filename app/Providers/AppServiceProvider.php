<?php

namespace App\Providers;

use App\Models\Note;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
    // public function boot(): void
    // {
    //     Schema::defaultStringLength(191);

    // }
public function boot(): void
{

    RateLimiter::for('api', function (Request $request) {
        return $request->user()
            ? Limit::perMinute(60)->by($request->user()->id)
            : Limit::perMinute(10)->by($request->ip());
    });
    Schema::defaultStringLength(191);

    Gate::define('update-note', function ($user, Note $note) {
        return $user->id === $note->user_id;
    });

    Gate::define('delete-note', function ($user, Note $note) {
        return $user->id === $note->user_id;
    });
}


}
