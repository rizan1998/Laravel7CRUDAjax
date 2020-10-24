<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CrudPolicy
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
    public function aksesCrud(User $user)
    { //$user dari model user, value user disini adalah user yang login
        return $user->username == 'ahmad1997';
    }
    public function tambahCrud(User $user)
    { //$user dari model user, value user disini adalah user yang login
        return $user->username == 'ahmad1997';
    }
    public function deleteCrud(User $user)
    { //$user dari model user, value user disini adalah user yang login
        return $user->username == 'ahmad1997';
    }
}
