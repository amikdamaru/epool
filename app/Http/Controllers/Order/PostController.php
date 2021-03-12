<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Auth;
use DB;

class PostController extends Controller
{
    public function delete($id){
    	
        DB::connection("epool")->beginTransaction();
                
        $order = Order::find($id);
        if($order)
        {
            $order->delete();
        }

        DB::connection("epool")->commit();
        
        return back();
    }

    public function save(Request $req){

        DB::connection("epool")->beginTransaction();
        
        if(isset($req->id) && $req->id != 0){
            $order = Order::find($req->id);
        }else{
            $order = new Order;
        }

        $order->order_at = $req->order_at;
        $order->quantity = $req->quantity;
        $order->users_id = Auth::user()->id;
        $order->pool_id = $req->pool_id;
        $order->save();
       
        DB::connection("epool")->commit();

        if(isset($req->id) && $req->id != 0){
            $this_order = $req->id;
        }else{
            $this_order = Order::latest()->pluck('id')->first();
        }

        return redirect('/order/detail/'.$this_order);
    }
}