@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.menu')
        <div class="col-md-10">
            <a class="btn btn-success" href="{{ route('empresa.create')}}">Nueva empresa</a>
            @if(count($empresas))
        <table class="table">
            <thead>
                <th>Orden</th><th>Nombre</th><th>Accion</th>
            </thead>
            <tbody>

         @foreach ($empresas as $item)
         <tr>
         <td>{{$item->orden}}</td>
             <td>{{$item->razonsocial}}</td>

             <td>
                 <a class="btn btn-primary" href="{{ route('empresa.edit',$item->id)}}">Editar</a>
                {!!Form::open(['method'=>'DELETE','route'=>['empresa.destroy',$item->id],'style'=>'display:inline']) !!}
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

