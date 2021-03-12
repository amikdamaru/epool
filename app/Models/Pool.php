<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pool extends Model
{
    use Softdeletes;
    protected $table = 'pool';
    protected $connection = 'epool';

}
