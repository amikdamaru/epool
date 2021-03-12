@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <a href="{{ url('/users/edit/'.$users->id) }}" type="button" class="btn btn-success float-right">Edit</a>
            <h3>Detail User - {{$users->name}}</h3>
        </div>      
        <div class="card-body">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>{{$users->name ?? '(Data Tidak Ditemukan)'}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{$users->email ?? '(Data Tidak Ditemukan)'}}</td>
                                </tr>
                                <tr>
                                    <td>No Telp</td>
                                    <td>{{$users->no_telp ?? '(Data Tidak Ditemukan)'}}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>{{$users->alamat ?? '(Data Tidak Ditemukan)'}}</td>
                                </tr>
                                <tr>
                                    <td>Access Control List</td>
                                    <td>
                                        @if($users->is_admin_user == 1) <h6><span class="badge badge-success">Admin User</span></h6> @endif
                                        @if($users->is_admin_pool == 1) <h6><span class="badge badge-success">Admin Kolam Renang</span></h6> @endif
                                        @if($users->is_admin_order == 1) <h6><span class="badge badge-success">Admin Transaksi Order</span></h6> @endif 
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <a href="{{ url('/admin/users') }}" type="button" class="btn btn-secondary">Kembali</a>
            </div>
        </div>     
    </div>     
</div>

@endsection
