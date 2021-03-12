@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <a href="{{ url('/order/edit/'.$order->id) }}" type="button" class="btn btn-success float-right">Edit</a>
            <h3>Detail Pesanan</h3>
        </div>      
        <div class="card-body">
            <div class="container mt-25">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Nomor Invoice</td>
                                    <td>#{{$order->id ?? '(Data Tidak Ditemukan)'}}</td>
                                </tr>
                                <tr>
                                    <td>Nama Pemesan</td>
                                    <td>{{$order->users->name ?? '(Data Tidak Ditemukan)'}}</td>
                                </tr>
                                <tr>
                                    <td>Kolam Renang yang Dipesan</td>
                                    <td>{{$order->pool->name ?? '(Data Tidak Ditemukan)'}}</td>
                                </tr>
                                <tr>
                                    <td>Harga Tiket per Orang</td>
                                    <td>{{$order->pool->harga ?? '(Data Tidak Ditemukan)'}}</td>
                                </tr>
                                <tr>
                                    <td>Jumlah Orang</td>
                                    <td>{{$order->quantity ?? '(Data Tidak Ditemukan)'}}</td>
                                </tr>
                                <tr>
                                    <td><h4>Total</h4></td>
                                    <td><h4>@if($order->pool) {{$order->quantity * $order->pool->harga}} @else (Data Tidak Ditemukan) @endif</h4></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <a href="{{ url('/admin/order') }}" type="button" class="btn btn-secondary">Kembali</a>
            </div>
        </div>     
    </div>     
</div>
@endsection
