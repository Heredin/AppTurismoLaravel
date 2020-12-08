@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        @include('admin.menu')
        <div class="col-md-8">
            {!!Form::open(['route'=>['ruta.update',$ruta],'method'=>'PUT','files'=>true])!!}
            <div class="jumbotron">
            <div class="row form-group">

                    {!!Form::label('slug','SLUG') !!}

                    {!!Form::text('slug',$ruta->slug,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">

                {!!Form::label('title','title') !!}

                {!!Form::text('title',$ruta->title,['class'=>'form-control']) !!}
        </div>
        <div class="row form-group">

            {!!Form::label('description','description') !!}

            {!!Form::text('description',$ruta->description,['class'=>'form-control']) !!}
    </div>
    <div class="row form-group">

        {!!Form::label('nombre','nombre') !!}

        {!!Form::text('nombre',$ruta->nombre,['class'=>'form-control']) !!}
        <br><br>
        {!!Form::label('descripcion','descripcion') !!}
    </div>
<div class="row form-group">
    {!!Form::textarea('descripcion',$ruta->descripcion,['class'=>'form-control']) !!}
</div>

<div class="row form-group">

    {!!Form::label('orden','Orden') !!}

    {!!Form::text('orden',$ruta->orden,['class'=>'form-control']) !!}
</div>

<div class="row form-group">
    {!!Form::label('urlfoto','urlfoto') !!}

<img src="/img/ruta/{{$ruta->urlfoto}}">


    {!!Form::file('urlfoto') !!}
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
