<?php
namespace Darbaoui\Avatar;

use Illuminate\Support\ServiceProvider;
use Darbaoui\Avatar\Avatar;

class AvatarServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('avatar', function () {
            return new Avatar(
                new AvatarSize(),
                new AvatarFormat(),
                new AvatarTheme()
            );
        });
    }
}
