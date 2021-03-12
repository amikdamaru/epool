<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;

class ViewController extends Controller
{
    function detail($id){

        $data['user'] = Users::find($id);
        return view('profil.detail', $data);
    }
    
}