@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <a href="{{ url('/pool/edit/'.$pool->id) }}" type="button" class="btn btn-success float-right">Edit</a>
            <h3>Detail Kolam Renang - {{$pool->name}}</h3>
        </div>      
        <div class="card-body">
            <div class="container">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$pool->id}}" readonly>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Nama Kolam Renang</td>
                                    <td>{{$pool->name}}</td>
                                </tr>
                                <tr>
                                    <td>Lokasi</td>
                                    <td>{{$pool->alamat}}</td>
                                </tr>
                                <tr>
                                    <td>Panjang x Lebar x Kedalaman</td>
                                    <td>{{$pool->panjang}} x {{$pool->lebar}} x {{$pool->kedalaman}}</td>
                                </tr>
                                <tr>
                                    <td>Harga Tiket per Orang</td>
                                    <td>{{$pool->harga}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <a href="{{ url('/admin/pool') }}" type="button" class="btn btn-secondary">Kembali</a>
            </div>
        </div>     
    </div>     
</div>

@endsection
