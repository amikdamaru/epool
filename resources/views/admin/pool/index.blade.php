@extends('layouts.app')

@section('content')
<div class="row mx-0 admin-page">
	@include('admin.layouts.sidebar')
	<div class="col-10 px-0" id="admin-wrapper">
		<div class="container-fluid">
			<button type="button" class="btn btn-primary float-right mt-3" data-toggle="modal" data-target="#modal_tambah"><i class="fa fa-plus mr-2"></i>Tambah Baru</button>
			<h1 class="my-4">Kolam Renang</h1>
			<table class="table table-striped table-bordered table-light">
				<thead>
					<tr>
                        <th>No</th>
                        <th>Kolam Renang</th>
                        <th>Lokasi</th>
                        <th>Panjang x Lebar x Kedalaman</th>
                        <th>Harga Tiket Per Orang</th>
                        <th></th>
                    </tr>
				</thead>
				<tbody>
					@forelse($pool as $item)
                    <tr>
                    	<td>{{$loop->iteration}}</td>
                        <td>{{$item->name ?? '(Data Tidak Ditemukan)'}}</td>
                        <td>{{$item->alamat ?? '(Data Tidak Ditemukan)'}}</td>
                        <td>{{$item->panjang ?? '0'}} x {{$item->lebar ?? '0'}} x {{$item->kedalaman ?? '0'}}</td>
                        <td>{{$item->harga ?? '(Data Tidak Ditemukan)'}}</td>
                        <td>
                        	<a type="button" class="btn btn-primary text-light" href="{{ url('/pool/single/'.$item->id) }}"><i class="fa fa-search"></i></a>
                        	<a type="button" class="btn btn-success text-light" href="{{ url('/pool/edit/'.$item->id) }}"><i class="fa fa-pencil-alt"></i></a>
                        	<a type="button" class="btn btn-danger text-light" href="{{ url('/pool/delete/'.$item->id) }}"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">
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

<div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Kolam Renang Baru</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="{{url('pool/baru')}}" method="POST">
				{{csrf_field()}}
				<div class="modal-body">
					<div class="row">
						<div class="form-group col-12">
							<label for="recipient-name" class="col-form-label">Nama Kolam Renang</label>
							<input type="text" class="form-control" name="name">
						</div>
						<div class="form-group col-12">
							<label for="message-text" class="col-form-label">Alamat</label>
							<input type="text" class="form-control" name="alamat">
						</div>
						<div class="form-group col-12">
							<label for="message-text" class="col-form-label">Harga Tiket per Orang</label>
							<input type="number" class="form-control" name="harga">
						</div>
						<div class="form-group col-12">
							<label for="message-text" class="col-form-label">Panjang Kolam</label>
							<input type="number" class="form-control" name="panjang">
						</div>
						<div class="form-group col-12">
							<label for="message-text" class="col-form-label">Lebar Kolam</label>
							<input type="number" class="form-control" name="lebar">
						</div>
						<div class="form-group col-12">
							<label for="message-text" class="col-form-label">Kedalaman Kolam</label>
							<input type="number" class="form-control" name="kedalaman">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
