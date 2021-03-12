<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
use Auth;
use DB;

class PostController extends Controller
{
    public function delete($id){
    	
        DB::connection("epool")->beginTransaction();
                
        $users = Users::find($id);
        if($users)
        {
            $users->delete();
        }

        DB::connection("epool")->commit();
        
        return back();
    }

    public function save(Request $req){

        DB::connection("epool")->beginTransaction();

        if(isset($req->id) && $req->id != 0){
            $users = Users::find($req->id);
        }else{
            $users = new Users;
        }

        $users->name = $req->name;
        $users->email = $req->email;
        $users->no_telp = $req->no_telp;
        $users->alamat = $req->alamat;
        $users->is_admin_user = $req->is_admin_user;
        $users->is_admin_pool = $req->is_admin_pool;
        $users->is_admin_order = $req->is_admin_order;
        $users->save();

        DB::connection("epool")->commit();

        if(isset($req->id) && $req->id != 0){
            return redirect('/admin/users');
        }else{
            return back();
        }
    }
}