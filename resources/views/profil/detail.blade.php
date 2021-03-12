@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Profil User</h1>      
    </div>
    <div class="container mt-25">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Nama User</td>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <td>Email User</td>
                            <td>{{$user->email}}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{$user->alamat}}</td>
                        </tr>
                        <tr>
                            <td>No Telp</td>
                            <td>{{$user->no_telp}}</td>
                        </tr>
                        <tr>
                            <td>Total Order</td>
                            <td>{{count($user->order)}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <a href="{{ url('/home') }}" type="button" class="btn btn-success">Edit Profil</a>
        <a href="{{ url('/home') }}" type="button" class="btn btn-secondary">Kembali ke Halaman Awal</a>
    </div>     
</div>

@endsection
