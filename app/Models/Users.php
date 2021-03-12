<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    use Softdeletes;
    protected $table = 'users';
    protected $connection = 'epool';

    public function order() {
        return $this->hasMany("App\Models\Order", "users_id", "id");
    }

}
