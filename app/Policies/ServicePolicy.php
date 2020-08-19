<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServicePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function viewStore(User $user) {
        $user_types = [
            'admin', // 開発者
            'manager'  // 管理職
        ];
        return (in_array($user->role, $user_types));
    }
}
