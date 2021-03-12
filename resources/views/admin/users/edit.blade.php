@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h3>Edit User - {{$users->name}}</h3>
        </div>      
        <div class="card-body">
            <div class="container">
                <form action="{{url('users/edit/'.$users->id)}}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$users->id}}" readonly>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Nama</td>
                                        <td>
                                            <div class="form-group mb-0">
                                                <input type="text" class="form-control"  value="{{$users->name}}" name="name">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>
                                            <div class="form-group mb-0">
                                                <input type="text" class="form-control" name="email" value="{{$users->email}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>No Telp</td>
                                        <td>
                                            <div class="form-group mb-0">
                                                <input type="text" class="form-control" name="no_telp" value="{{$users->no_telp}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>
                                            <div class="form-group mb-0">
                                                <input type="text" class="form-control" name="alamat" value="{{$users->alamat}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Access Control List</td>
                                        <td>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input cb-big" type="checkbox" value="1" id="is_admin_user" name="is_admin_user" @if($users->is_admin_user == 1) checked="" @endif>
                                                <label class="form-check-label" for="is_admin_user">
                                                    User dapat mengakses halaman Admin User
                                                </label>
                                            </div>

                                            <div class="form-check mb-2">
                                                <input class="form-check-input cb-big" type="checkbox" value="1" id="is_admin_pool" name="is_admin_pool" @if($users->is_admin_pool == 1) checked="" @endif>
                                                <label class="form-check-label" for="is_admin_pool">
                                                    User dapat mengakses halaman Admin Kolam Renang
                                                </label>
                                            </div>

                                            <div class="form-check mb-2">
                                                <input class="form-check-input cb-big" type="checkbox" value="1" id="is_admin_order" name="is_admin_order" @if($users->is_admin_order == 1) checked="" @endif>
                                                <label class="form-check-label" for="is_admin_order">
                                                    User dapat mengakses halaman Admin Order
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary ml-1 float-right">Simpan</button>
                    <a href="{{ url('/admin/users') }}" type="button" class="btn btn-danger float-right">Batal</a>
                </form>
            </div>
        </div>     
    </div>     
</div>

@endsection
