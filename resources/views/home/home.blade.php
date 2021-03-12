@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1>Pesan E - Pool Anda hari ini!</h1>      
        <p>Memudahkan Anda dalam mencari katalog kolam renang yang aman dari keramaian selama masa pandemi</p>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Kolam Renang</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Panjang x Lebar x Kedalaman</th>
                        <th scope="col">Harga Tiket Per Orang</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pool as $item)
                    <tr>
                        <td>{{$item->name ?? '(Data Tidak Ditemukan)'}}</td>
                        <td>{{$item->alamat ?? '(Data Tidak Ditemukan)'}}</td>
                        <td>{{$item->panjang ?? '0'}} x {{$item->lebar ?? '0'}} x {{$item->kedalaman ?? '0'}}</td>
                        <td>{{$item->harga ?? '(Data Tidak Ditemukan)'}}</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_order_{{$item->id}}">Pesan Sekarang</button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">
                            <div class="py-50 text-center">
                                <h4>Belum Ada Kolam Renang Yang Tersedia</h4>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@foreach($pool as $item)
<div class="modal fade" id="modal_order_{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pesan Tiket Masuk - {{$item->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('order')}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="pool_id" value="{{$item->id}}" readonly>
                <div class="modal-body">
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th scope="col">Kolam Renang</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Panjang x Lebar x Kedalaman</th>
                                <th scope="col">Harga Tiket Per Orang</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>{{$item->panjang}} x {{$item->lebar}} x {{$item->kedalaman}}</td>
                            <td>{{$item->harga}}</td>
                        </tr>
                    </table>
                    <div class="row">
                        <div class="form-group col-8">
                            <label for="recipient-name" class="col-form-label">Pesan untuk tanggal :</label>
                            <input type="date" class="form-control" name="order_at">
                        </div>
                        <div class="form-group col-4">
                            <label for="message-text" class="col-form-label">Pesan untuk berapa orang :</label>
                            <input type="number" class="form-control" name="quantity">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                    <button type="submit" class="btn btn-primary">Kirim Pesanan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection
