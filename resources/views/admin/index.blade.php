@extends('layouts.app')

@section('content')
<div class="row mx-0 admin-page">
    @include('admin.layouts.sidebar')
    <div class="col-10 px-0" id="admin-wrapper">
        <div class="container-fluid">
            <h1 class="mt-4">Admin CMS</h1>
            <h6 class="mt-4">Navigasi pada sidebar untuk akses pengaturan yang diinginkan</h6>
        </div>
    </div>
</div>
@endsection
