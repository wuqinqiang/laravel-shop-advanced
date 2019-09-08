<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Installment;
use Illuminate\Auth\Access\HandlesAuthorization;

class InstallmentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the installment.
     *
     * @param  \App\Models\User $user
     * @param  \App\Models\Installment $installment
     * @return mixed
     */
    public function own(User $user, Installment $installment)
    {
        return $installment->user_id == $user->id;
    }


}
