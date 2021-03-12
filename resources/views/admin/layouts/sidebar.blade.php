<div class="col-2 px-0">
	<div id="sidebar-wrapper">
		<div class="list-group list-group-flush">
			@if(Auth::user()->is_admin_user == 1)
			<a href="{{ url('/admin/users') }}" class="list-group-item list-group-item-action text-light sidebar-item">User</a>
			@endif
			@if(Auth::user()->is_admin_pool == 1)
			<a href="{{ url('/admin/pool') }}" class="list-group-item list-group-item-action text-light sidebar-item">Kolam Renang</a>
			@endif
			@if(Auth::user()->is_admin_order == 1)
			<a href="{{ url('/admin/order') }}" class="list-group-item list-group-item-action text-light sidebar-item">Transaksi Order</a>
			@endif
		</div>
	</div>
</div>