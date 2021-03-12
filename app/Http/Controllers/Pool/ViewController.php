<?php

namespace App\Http\Controllers\Pool;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pool;

class ViewController extends Controller
{
    function single($id){
    	$data['pool'] = Pool::find($id);
        return view('admin.pool.single', $data);
    }

    function edit($id){
    	$data['pool'] = Pool::find($id);
        return view('admin.pool.edit', $data);
    }


}