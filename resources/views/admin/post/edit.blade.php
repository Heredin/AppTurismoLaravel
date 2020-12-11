@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        @include('admin.menu')
        <div class="col-md-8">
            {!!Form::open(['route'=>['post.update',$post],'method'=>'PUT','files'=>true])!!}
            <div class="jumbotron">
            <div class="row form-group">

                    {!!Form::label('slug','SLUG') !!}

                    {!!Form::text('slug',$post->slug,['class'=>'form-control']) !!}
            </div>
            <div class="row form-group">

                {!!Form::label('title','title') !!}

                {!!Form::text('title',$post->title,['class'=>'form-control']) !!}
        </div>
        <div class="row form-group">

            {!!Form::label('description','description') !!}

            {!!Form::text('description',$post->description,['class'=>'form-control']) !!}
    </div>
    <div class="row form-group">

        {!!Form::label('nombre','nombre') !!}

        {!!Form::text('nombre',$post->nombre,['class'=>'form-control']) !!}
        <br><br>
        {!!Form::label('descripcion','descripcion') !!}
    </div>
<div class="row form-group">
    {!!Form::textarea('descripcion',$post->descripcion,['class'=>'form-control']) !!}
</div>

<div class="row form-group">

    {!!Form::label('orden','Orden') !!}

    {!!Form::text('orden',$post->orden,['class'=>'form-control']) !!}
</div>
<div class="row form-group">

    {!!Form::label('urlvideo','Url Video') !!}

    {!!Form::text('urlvideo',$post->urlvideo,['class'=>'form-control']) !!}
</div>
<div class="row form-group">
    {!!Form::label('urlfoto','urlfoto') !!}

<img src="/img/post/{{$post->urlfoto}}">


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
