@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h3>Edit Kolam Renang - {{$pool->name}}</h3>
        </div>      
        <div class="card-body">
            <div class="container">
                <form action="{{url('pool/edit/'.$pool->id)}}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$pool->id}}" readonly>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Nama Kolam Renang</td>
                                        <td>
                                            <div class="form-group mb-0">
                                                <input type="text" class="form-control"  value="{{$pool->name}}" name="name">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lokasi</td>
                                        <td>
                                            <div class="form-group mb-0">
                                                <input type="text" class="form-control" name="alamat" value="{{$pool->alamat}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Panjang</td>
                                        <td>
                                            <div class="form-group mb-0">
                                                <input type="number" class="form-control" name="panjang" value="{{$pool->panjang}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lebar</td>
                                        <td>
                                            <div class="form-group mb-0">
                                                <input type="number" class="form-control" name="lebar" value="{{$pool->lebar}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kedalaman</td>
                                        <td>
                                            <div class="form-group mb-0">
                                                <input type="number" class="form-control" name="kedalaman" value="{{$pool->kedalaman}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Harga Tiket per Orang</td>
                                        <td>
                                            <div class="form-group mb-0">
                                                <input type="number" class="form-control" name="harga" value="{{$pool->harga}}">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary ml-1 float-right">Simpan</button>
                    <a href="{{ url('/admin/pool') }}" type="button" class="btn btn-danger float-right">Batal</a>
                </form>
            </div>
        </div>     
    </div>     
</div>

@endsection
