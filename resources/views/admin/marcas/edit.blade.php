@extends('layout.admin')

@section('content')
    <div class="index-container">
        @include('admin.banners.form', ['banner'=>$banner, 'titulo'=>"Editar", 'url'=>'/admin/banners/'.$banner->id, 'method'=>'PATCH'])
    </div>
@endsection