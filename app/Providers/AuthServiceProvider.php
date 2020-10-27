<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\User;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Crud' => 'App\Policies\CrudPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //
        Gate::define('tambah_data', function ($user) {
            //return true;
            $role = User::find($user->id)->role; //$user->id adalah user yang sedang login
            foreach ($role as $r) {
                if ($r->id === 1) { //id disini berdasarkan master_akses_id yang ada di dalam akses user
                    return true;
                }
            }
            return false;
        });

        // untuk redirect di controller
        Gate::define('akses', function ($user) {
            $role = User::find($user->id)->role;
            foreach ($role as $r) {
                if (!$r->id === 1) {
                    return true;
                }
            }
            return false;
        });
    }
}
