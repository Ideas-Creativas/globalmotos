    {!! Form::open(['url' => $url, 'method' => $method, 'files' => true]) !!}
        {{ Form::token() }}
        <div class="form-container">
        <h1>{{ $titulo }}</h1>
        <div class="form-group">
        {{ Form::label('Nombre') }}
        {{ Form::text('name',$banner->name,['class'=>'form-control','placeholder'=>'Ingresa el Nombre']) }}
        </div>
        <div class="form-group">
        {{ Form::label('Ingresar enlace') }}
        {{ Form::text('link',$banner->link,['class'=>'form-control','placeholder'=>'Enlace']) }}
        </div>
        <div class="form-group">
            {{ Form::label('Publicar desde') }}
            @if(!$banner->start)
                {{$date = \Carbon\Carbon::now()}}
            @else
                {{ $date = \Carbon\Carbon::createFromDate($banner->start) }}
            @endif
            {{ Form::date('start', $date) }}
        </div>
        <div class="form-group">
            {{ Form::label('Publicar hasta') }}
            @if(!$banner->start)
                {{$date = \Carbon\Carbon::now()}}
            @else
                {{ $date = \Carbon\Carbon::createFromDate($banner->end) }}
            @endif
            {{ Form::date('end', $date) }}
        </div>
        <div class="form-group">
            {{ Form::label('Seleccionar archivo de banner') }}
            {{ Form::file('image_url') }}
        </div>
        <div class="form-group">
            <a href="/admin/banners">Regresar al listado</a>
            <input type="submit" value="Guardar" class="btn btn-success">
        </div>
        </div>
    {!! Form::close() !!}