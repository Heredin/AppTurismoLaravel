@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.menu')
        <div class="col-md-10">
            <a class="btn btn-success" href="{{ route('post.create')}}">Nuevo post</a>
            @if(count($posts))
        <table class="table">
            <thead>
                <th>Orden</th><th>Nombre</th><th>Accion</th>
            </thead>
            <tbody>

         @foreach ($posts as $item)
         <tr>
         <td>{{$item->orden}}</td>
             <td>{{$item->nombre}}</td>

             <td>
                 <a class="btn btn-primary" href="{{ route('post.edit',$item->id)}}">Editar</a>
                {!!Form::open(['method'=>'DELETE','route'=>['post.destroy',$item->id],'style'=>'display:inline']) !!}
                {!!Form::submit('ELIMINAR',['class'=>'btn btn-danger','onclick'=>'return confirm("Esta seguro de eliminar")'])!!}
                {!!Form::close() !!}
            </td>
            </tr>
         @endforeach

            </tbody>
        </table>
        @else
        <p>No hay registros</p>
        @endif
        </div>
    </div>
</div>
@endsection

