<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Platillo;

class PlatilloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $platillos=Platillo::all();
        return view('platillos.index', compact('platillos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('platillos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Platillo $request)
    {

     if($request->hasFile('foto')){
         $file=$request->file('foto'); 
         $name= time().$file->getClientOriginalName();
         $file->move(public_path().'/images/', $name);
        }
        $platillos= new Platillo();
        $platillos->name=$request->input('name');
        $platillos->precio=$request->input('precio');
        $platillos->foto = $name;
        $platillos->save();
        return redirect()->route('platillos.index')->with('info','Platillo creado Correctamente');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function show(Platillo $platillo)
    {
        //$platillo = Platillo::find($platillo);
        return view('platillos.show', compact('platillo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function edit(Platillo $platillo)
    {
        return view('platillos.edit',compact('platillo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Platillo $platillo)
    {


        $platillo->fill($request->except('foto'));

        if($request->hasFile('foto')){
           
            $file=$request->file('foto'); 
            $name= time().$file->getClientOriginalName();
            $platillo->foto=$name;
            $file->move(public_path().'/images/', $name);
           }   
           $Mensaje=["required"=>'El :attribute es requerido'];
        
           $platillo->save();
           return redirect()->route('platillos.show',$platillo->id)
           ->with('info','Platillo Actualizado Correctamente ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Platillo $platillo)
    {
        $file_path = public_path().'/images/'.$platillo->foto;
        \File::delete($file_path);
        
        $platillo->delete();
        return redirect()->route('platillos.index')->with('info','platiilo borrado');
    }
}
