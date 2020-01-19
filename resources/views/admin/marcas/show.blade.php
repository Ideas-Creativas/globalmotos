@extends('layout.admin')

@section('content')
    @if(!$banner)
        @return view('/admin/banners/');
    @else
    <div class="banner-container">
        <div>
        </div>
            <div>
                <!-- <div id='banners-preview'></div> -->
            </div>
            <div class="banner-listado">
                <div><img src="{{ $banner->image_url }}" alt=""></div>
                <div>
                    <ul>
                        <li>Link: {{ $banner->link }}</li>
                        <li>Inicia: {{ $banner->start }}</li>
                        <li>Finaliza: {{ $banner->end }}</li>
                        <li><a href="/admin/banners/">Volver</a></li>
                    </ul>
                </div>
            </div>
        </div>
    @endif()
@endsection