@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.menu')
        <div class="col-md-8">
            {!!Form::open(['route'=>['empresa.store'],'method'=>'POST','files'=>true])!!}
            <div class="jumbotron">
            <div class=" form-group">

                    {!!Form::label('slug','SLUG') !!}

                    {!!Form::text('slug',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">

                {!!Form::label('title','Title') !!}

                {!!Form::text('title',null,['class'=>'form-control','maxlength'=>'67','required']) !!}
        </div>
        <div class=" form-group">

            {!!Form::label('description','Description') !!}

            {!!Form::text('description',null,['class'=>'form-control','required']) !!}
    </div>
    <div class="form-group">

        {!!Form::label('razonsocial','razonsocial') !!}

        {!!Form::text('razonsocial',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">

    {!!Form::label('descripcion','Descripcion') !!}

    {!!Form::textarea('descripcion',null,['class'=>'form-control','maxlength'=>'67']) !!}
</div>

<div class="form-group">

    {!!Form::label('orden','Orden') !!}

    {!!Form::text('orden',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    <label for="ruta_id">Rutas</label>
    {!!Form::select('ruta_id',$rutas,null,['class'=>'form-control'])!!}

</div>
<div class="form-group">
    {!!Form::checkbox('estado',null,null,)!!}
    <label for="estado">Estado</label>
</div>
<div class="form-group">

    {!!Form::label('urlfoto','urlfoto') !!}
{!! Form::file('urlfoto') !!}
</div>
<div class="form-group">

        {!!Form::label('urllogo','urllogo') !!}
        {!! Form::file('urllogo') !!}
    </div>
            <div class="form-group">
            <div class="col-sm-6">
                {!!Form::submit('GUARDAR',['class'=>'btn btn-success']) !!}
            </div>
    </div>
    {!!Form::close()!!}
        </div>
    </div>
</div>
</div>
@endsection
