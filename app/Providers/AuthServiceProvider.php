<?php

namespace App\Providers;

use App\Conversation;
use App\Policies\ConversationsPolicy;
use App\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
    // Conversation::class => ConversationsPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

    Gate::before(function (User $user) {
      if ($user->is_admin) return true;
    });

    Gate::before(function ($user, $ability) {
      return $user->abilities()->contains($ability);
    });
    }

}
