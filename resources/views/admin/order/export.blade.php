<table>
	<tr>
		<td>Data Transaksi Order E - Pool</td>
	</tr>
	<tr>
		<td colspan="7"></td>
	</tr>
	<tr>
		<td>No</td>
		<td>No Invoice</td>
		<td>Nama Pemesan</td>
		<td>Kolam Renang yang Dipesan</td>
		<td>Pesan untuk Tanggal</td>
		<td>Jumlah Orang</td>
		<td>Total</td>
	</tr>
	@foreach($order as $item)
	<tr>
		<td>{{$loop->iteration}}</td>
		<td>#{{$item->id}}</td>
		<td>{{$item->users->name ?? '(Data Tidak Ditemukan)'}}</td>
		<td>{{$item->pool->name ?? '(Data Tidak Ditemukan)'}}</td>
		<td>{{date('d F Y', strtotime($item->order_at)) ?? '(Data Tidak Ditemukan)'}}</td>
		<td>{{$item->quantity ?? '(Data Tidak Ditemukan)'}}</td>
		<td>@if($item->pool) {{$item->quantity * $item->pool->harga}} @else (Data Tidak Ditemukan) @endif</td>
	</tr>
	@endforeach
</table>