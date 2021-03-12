<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Models\Pool;
use App\Models\Order;

class ViewController extends Controller
{
    function index(){

        return view('admin.index');
    }

    function users(){
    	$data['users'] = Users::all();
        return view('admin.users.index', $data);
    }

    function pool(){
    	$data['pool'] = Pool::all();
        return view('admin.pool.index', $data);
    }

    function order(){
    	$data['order'] = Order::all();
    	$data['pool'] = Pool::all();
        return view('admin.order.index', $data);
    }
    
}