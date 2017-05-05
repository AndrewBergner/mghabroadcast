<?php

namespace App\Models;

use App\Models\Permission;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{

    /**
     * Start relationship definitions.
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'role_user', 'user_id', 'role_id');
    }

    public function permissions()
    {
        return $this->hasMany('App\Models\Permission');
    }

    /**
     * End relationship definitions.
     */

}
