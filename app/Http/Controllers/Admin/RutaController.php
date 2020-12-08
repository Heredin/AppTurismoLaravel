<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ruta;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class RutaController extends Controller
{
    public function index()
    {
        $rutas = Ruta::all();
        return view("admin.ruta.index", compact("rutas"));
    }

    public function create()
    {
        return view("admin.ruta.create");
    }

    public function store(Request $request)
    {
        $ruta = new Ruta($request->all());
        if ($request->hasfile('urlfoto')) {
            $imagen = $request->file('urlfoto');
            $nuevonombre = 'ruta_' . time() . '.' . $imagen->guessExtension();
            Image::make($imagen->getRealPath())
                ->fit(900, 400, function ($constraint) {$constraint->upsize();})
                ->save(public_path('/img/ruta/' . $nuevonombre));
            $ruta->urlfoto = $nuevonombre;
        }
        $ruta->slug=Str::slug($request->nombre);
        $ruta->save();
        return redirect('/admin/ruta');

    }

    public function edit($id)
    {
        $ruta = Ruta::findOrFail($id);
        return view("admin.ruta.edit", \compact('ruta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ruta =  Ruta::findOrFail($id);
        $ruta->fill($request->all());
        $foto_anterior =$ruta->urlfoto;

        if ($request->hasfile('urlfoto')) {
            $rutaAnterior =public_path('/img/ruta/'.$foto_anterior);
            if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }
            $imagen = $request->file('urlfoto');
            $nuevonombre = 'ruta_' . time() . '.' . $imagen->guessExtension();
            Image::make($imagen->getRealPath())
                ->fit(900, 400, function ($constraint) {$constraint->upsize();})
                ->save(public_path('/img/ruta/' . $nuevonombre));
            $ruta->urlfoto = $nuevonombre;
        }
        $ruta->slug=Str::slug($request->nombre);
        $ruta->save();
        return redirect('/admin/ruta');

    }

    public function destroy($id)
    {
        $ruta = Ruta::findOrFail($id);
        if (file_exists(public_path('/img/ruta/' . $ruta->urlfoto))) {
            unlink(public_path('/img/ruta/' . $ruta->urlfoto));
        }

        $ruta->delete();
        return redirect()->route('ruta.index');
    }
}
