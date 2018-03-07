<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Note;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::where('pare','=',NULL)->get();
        $array=array();
        foreach($categories as $category){
          $notes= Note::where('idcategoria',$category->id)->get();
          $array[$category->id]=$notes;
        }

        return view('user.notes.index')->with(['notes'=>$array,'categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $note = new Note;
        $categories= Category::where('pare','=',NULL)->get();

        return view('user.notes.create')->with(['note'=>$note,'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $inputs=$request->all();

      Note::create($inputs);

      session()->flash('misatge','Nota creada!'); //Flash perque un cop creat es eliminat

      return redirect()->route('ruta_categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note = Note::find($id);
        
        return view('user.notes.show')->with(['note'=>$note]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
