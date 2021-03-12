<?php

namespace App\Http\Controllers\Pool;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pool;
use Auth;
use DB;

class PostController extends Controller
{
    public function delete($id){
    	
        DB::connection("epool")->beginTransaction();
                
        $pool = Pool::find($id);
        if($pool)
        {
            $pool->delete();
        }

        DB::connection("epool")->commit();
        
        return back();
    }

    public function save(Request $req){

        DB::connection("epool")->beginTransaction();

        if(isset($req->id) && $req->id != 0){
            $pool = Pool::find($req->id);
        }else{
            $pool = new Pool;
        }

        $pool->name = $req->name;
        $pool->alamat = $req->alamat;
        $pool->panjang = $req->panjang;
        $pool->lebar = $req->lebar;
        $pool->kedalaman = $req->kedalaman;
        $pool->harga = $req->harga;
        $pool->save();

        DB::connection("epool")->commit();

        if(isset($req->id) && $req->id != 0){
            $this_pool = $req->id;
            return redirect('/admin/pool');
        }else{
            $this_pool = Pool::latest()->pluck('id')->first();
            return back();
        }

    }
}