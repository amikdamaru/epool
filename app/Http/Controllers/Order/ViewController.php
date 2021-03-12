<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Pool;
use App\Exports\ExportOrder;

class ViewController extends Controller
{
	function single($id){
    	$data['order'] = Order::find($id);
        return view('admin.order.single', $data);
    }

    function edit($id){
    	
    	$data['pool'] = Pool::all();
    	$data['order'] = Order::find($id);
        return view('admin.order.edit', $data);
    }

    function detail($id){

        $data['order'] = Order::find($id);
        return view('home.detail', $data);
    }

    function export(){
        
        $data['order'] = Order::all();
        // return view('admin.order.export', $data);
        return (new ExportOrder($data))->download('Export_Order.xlsx');
    }
    
}