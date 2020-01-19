@extends('layout.admin')

@section('content')
    <div class="index-container">
        @include('admin.banners.form',['banner'=>$banner,"titulo"=>"Nuevo Banner", 'url'=>'/admin/banners', 'method'=>'POST'])
    </div>
@endsection