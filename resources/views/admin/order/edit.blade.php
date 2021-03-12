@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h3>Edit Order - #{{$order->id}}</h3>
        </div>      
        <div class="card-body">
            <div class="container">
                <form action="{{url('order/edit/'.$order->id)}}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$order->id}}" readonly>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Pilih Kolam Renang</td>
                                        <td>
                                            <div class="form-group mb-0">
                                                <select class="form-control" name="pool_id">
                                                    @foreach($pool as $item)
                                                    <option value="{{$item->id}}" @if($item->id == $order->pool->id) selected="" @endif>{{$item->name}}</option>  
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Pesan untuk tanggal</td>
                                        <td>
                                            <div class="form-group mb-0">
                                                <input type="date" class="form-control" name="order_at" value="{{date('Y-m-d', strtotime($order->order_at))}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Pesan untuk berapa orang</td>
                                        <td>
                                            <div class="form-group mb-0">
                                                <input type="text" class="form-control" name="quantity" value="{{$order->quantity}}">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary ml-1 float-right">Simpan</button>
                    <a href="{{ url('/admin/order') }}" type="button" class="btn btn-danger float-right">Batal</a>
                </form>
            </div>
        </div>     
    </div>     
</div>

@endsection
