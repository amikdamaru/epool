<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;

class ViewController extends Controller
{
    function single($id){
    	$data['users'] = Users::find($id);
        return view('admin.users.single', $data);
    }

    function edit($id){
    	
    	$data['users'] = Users::find($id);
        return view('admin.users.edit', $data);
    }

    function detail($id){

        $data['user'] = Users::find($id);
        return view('profil.detail', $data);
    }
    
}