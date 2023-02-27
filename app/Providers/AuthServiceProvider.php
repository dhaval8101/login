<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
class AuthServiceProvider extends ServiceProvider
{
    
    /*
    $protected policies = [
        'Application\Models\Model' => 'Application\Policies\ModeloPolicy',
    ];

    /**
     * Register any authentication/authorization services.
     *
     * @null return
     */
    public function bootstrap()
    {
        $this->registerPolicies();
        
        if(! $this->app->routesAreCached()){

        Passport::routes(); // add this
    }
    Passport::tokensExpireIn(now()->addDays(15));
    Passport::refreshTokensExpireIn(now()->addDays(30));
    Passport::personalAccessTokensExpireIn(now()->addMonths(6));
}
}