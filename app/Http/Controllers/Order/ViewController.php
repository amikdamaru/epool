<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;

class ViewController extends Controller
{
    function detail($id){

        $data['order'] = Order::find($id);
        return view('home.detail', $data);
    }
    
}