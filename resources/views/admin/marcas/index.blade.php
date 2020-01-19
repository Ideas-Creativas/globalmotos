@extends('layout.admin')

@section('content')
    <div class="banner-container">
    <div>
    </div>
        <div>
            <!-- <div id='banners-preview'></div> -->
        </div>
        <div class="banner-listado">
            <table>
                <tr>
                    <td>Banner</td>
                    <td>Nombre</td>
                    <td>Inicia</td>
                    <td>Vence</td>
                    <td>Acciones</td>
                </tr>
            @foreach ($banners as $banner)
                <tr>
                    <td>
                        <a href="{{ $banner->link }}" target="_blank">
                            <img src="{{ asset('/images/banners/'.$banner->image_url) }}" alt="{{ $banner->image_url }}">
                        </a>
                    </td>
                    <td>{{ $banner->name }}</td>
                    <td>{{ $banner->start }}</td>
                    <td>{{ $banner->end }}</td>
                    <td>
                        <a href="/admin/banners/{{ $banner->id }}/edit">Editar</a>
                        @include('admin.banners.delete',['banner' => $banner])
                    </td>
                </tr>
            @endforeach
            </table>
            
            </ul>
        </div>
    </div>
@endsection