@extends('layouts.app')

@section('content')
<div class="row mx-0 admin-page">
	@include('admin.layouts.sidebar')
	<div class="col-10 px-0" id="admin-wrapper">
		<div class="container-fluid">
			<h1 class="my-4">User</h1>
			<table class="table table-striped table-bordered table-light">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Email</th>
						<th>No Telp</th>
						<th>Alamat</th>
						<th class="text-center">Acces Control List</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@forelse($users as $item)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$item->name ?? '(Data Tidak Ditemukan)'}}</td>
						<td>{{$item->email ?? '(Data Tidak Ditemukan)'}}</td>
						<td>{{$item->no_telp ?? '(Data Tidak Ditemukan)'}}</td>
						<td>{{$item->alamat ?? '(Data Tidak Ditemukan)'}}</td>
						<td class="text-center">
							@if($item->is_admin_user == 1) <h6><span class="badge badge-success">Admin User</span></h6> @endif
							@if($item->is_admin_pool == 1) <h6><span class="badge badge-success">Admin Kolam Renang</span></h6> @endif
							@if($item->is_admin_order == 1) <h6><span class="badge badge-success">Admin Transaksi Order</span></h6> @endif
						</td>
						<td class="text-center">
							<a type="button" class="btn btn-primary text-light" href="{{ url('/users/single/'.$item->id) }}"><i class="fa fa-search"></i></a>
							<a type="button" class="btn btn-success text-light" href="{{ url('/users/edit/'.$item->id) }}"><i class="fa fa-pencil-alt"></i></a>
							<a type="button" class="btn btn-danger text-light" href="{{ url('/users/delete/'.$item->id) }}"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					@empty
					<tr>
						<td colspan="7">
							<div class="py-50 text-center">
								<h4>Belum Ada User Dibuat</h4>
							</div>
						</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
