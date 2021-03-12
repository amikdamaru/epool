<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use Softdeletes;
    protected $table = 'order';
    protected $connection = 'epool';

    public function users() {
        return $this->hasOne("App\Models\Users", "id", "users_id");
    }
    public function pool() {
        return $this->hasOne("App\Models\Pool", "id", "pool_id");
    }

}
