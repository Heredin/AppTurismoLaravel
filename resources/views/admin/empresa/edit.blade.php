@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        @include('admin.menu')
        <div class="col-md-8">
            {!!Form::open(['route'=>['empresa.update',$empresa],'method'=>'PUT','files'=>true])!!}
            <div class="jumbotron">
            <div class="row form-group">

                    {!!Form::label('slug','SLUG') !!}

                    {!!Form::text('slug',$empresa->slug,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">

                {!!Form::label('title','title') !!}

                {!!Form::text('title',$empresa->title,['class'=>'form-control']) !!}
        </div>
        <div class="row form-group">

            {!!Form::label('description','description') !!}

            {!!Form::text('description',$empresa->description,['class'=>'form-control']) !!}
    </div>
    <div class="row form-group">

        {!!Form::label('razonsocial','razonsocial') !!}

        {!!Form::text('razonsocial',$empresa->razonsocial,['class'=>'form-control']) !!}
        <br><br>
        {!!Form::label('descripcion','descripcion') !!}
    </div>
<div class="row form-group">
    {!!Form::textarea('descripcion',$empresa->descripcion,['class'=>'form-control']) !!}
</div>

<div class="row form-group">

    {!!Form::label('orden','Orden') !!}

    {!!Form::text('orden',$empresa->orden,['class'=>'form-control']) !!}
</div>
<div class="row form-group">
    <label for="ruta_id">Rutas</label>
    {!!Form::select('ruta_id',$rutas,$empresa->ruta_id,['class'=>'form-control'])!!}

</div>
<div class="row form-group">
    {!!Form::checkbox('estado',null,$empresa->ruta_id,)!!}
    <label for="estado">Estado</label>
</div>
<div class="row form-group">
    {!!Form::label('urlfoto','urlfoto') !!}

<img src="/img/empresa/{{$empresa->urlfoto}}">


    {!!Form::file('urlfoto') !!}
</div>
<div class="row form-group">
    {!!Form::label('urllogo','urllogo') !!}

<img src="/img/empresa/{{$empresa->urllogo}}">


    {!!Form::file('urllogo') !!}
</div>
            <div class="row form-group">

            <div class="col-sm-6">
                {!!Form::submit('GUARDAR',['class'=>'btn btn-success']) !!}
            </div>
    </div>
    {!!Form::close()!!}
        </div>
    </div>
</div>
</div>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace('descripcion');
</script>
@endsection
