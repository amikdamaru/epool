@extends('layouts.app')

@section('content')
<div class="row mx-0 admin-page">
	@include('admin.layouts.sidebar')
	<div class="col-10 px-0" id="admin-wrapper">
		<div class="container-fluid">
			<button type="button" class="btn btn-primary float-right mt-3" data-toggle="modal" data-target="#modal_tambah"><i class="fa fa-plus mr-2"></i>Tambah Baru</button>
			<h1 class="my-4">Transaksi Order</h1>
			<table class="table table-striped table-bordered table-light">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Pemesan</th>
						<th>Kolam Renang yang Dipesan</th>
						<th>Harga Tiket per Orang</th>
						<th>Jumlah Orang</th>
						<th>Total</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@forelse($order as $item)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$item->users->name ?? '(Data Tidak Ditemukan)'}}</td>
						<td>{{$item->pool->name ?? '(Data Tidak Ditemukan)'}}</td>
						<td>{{$item->pool->harga ?? '(Data Tidak Ditemukan)'}}</td>
						<td>{{$item->quantity ?? '(Data Tidak Ditemukan)'}}</td>
						<td>@if($item->pool) {{$item->quantity * $item->pool->harga}} @else (Data Tidak Ditemukan) @endif</td>
						<td>
							<a type="button" class="btn btn-primary text-light" href="{{ url('/order/single/'.$item->id) }}"><i class="fa fa-search"></i></a>
							<a type="button" class="btn btn-success text-light" href="{{ url('/order/edit/'.$item->id) }}"><i class="fa fa-pencil-alt"></i></a>
							<a type="button" class="btn btn-danger text-light" href="{{ url('/order/delete/'.$item->id) }}"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					@empty
					<tr>
						<td colspan="7">
							<div class="py-50 text-center">
								<h4>Belum Ada Transaksi yang Dilakukan</h4>
							</div>
						</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Buat Order Baru</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="{{url('order/baru')}}" method="POST">
				{{csrf_field()}}
				<div class="modal-body">
					<div class="row">
						<div class="form-group col-12">
							<label for="recipient-name" class="col-form-label">Pilih Kolam Renang</label>
							<select class="form-control" name="pool_id">
								@foreach($pool as $item)
								<option value="{{$item->id}}">{{$item->name}}</option>  
								@endforeach
							</select>
						</div>
						<div class="form-group col-12">
							<label for="recipient-name" class="col-form-label">Pesan untuk tanggal :</label>
							<input type="date" class="form-control" name="order_at">
						</div>
						<div class="form-group col-12">
							<label for="message-text" class="col-form-label">Pesan untuk berapa orang :</label>
							<input type="text" class="form-control" name="quantity">
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
@endsection


@section('js')
<script type="text/javascript">
	$(document).ready(function () {
		$('.js-select2').select2();
	});
</script>
@endsection