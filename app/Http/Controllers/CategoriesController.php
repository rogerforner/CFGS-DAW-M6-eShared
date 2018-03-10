<?php

namespace App\Http\Controllers;
use App\Category;
use App\Note;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $fills=array();
      $parent=Category::where('pare','=',NULL)->paginate(10);
      foreach($parent as $pare){
        $fill=Category::where('pare','=',$pare->id)->get();
        $fills[$pare->id] = $fill;
      }
      return view('admin.categories.index')->with(['categories'=>$parent,'fills'=>$fills]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $category = new Category;

      $parent=Category::where('pare','=',NULL)->get();

      return view('admin.categories.create')->with(['category'=>$category,'categories'=>$parent]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $padrecito = $request->only('pare');
        //dd($padrecito);
        $inputs=$request->only('nom');
        $inputs = array_merge($inputs,$padrecito);
        $pcategory = Category::create($inputs);

        session()->flash('misatge','Categoria Creada!'); //Flash perque un cop creat es eliminat

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
      $category=Category::find($id)->get()->first();
      $notes=Note::where('idcategoria','=',$id)->get();
      //dd($category);
      return view('user.categories.index')->with(['category'=>$category,'notes'=>$notes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::find($id);

        $parent=Category::where('pare','=',NULL)->get();
        return view('admin.categories.edit')->with(['category'=>$category,'categories'=>$parent]);
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
      $padrecito = $request->only('pare');
      $inputs=$request->only('nom');
      $inputs = array_merge($inputs,$padrecito);
      $category=Category::find($id);

      $category->update(
        $inputs
      );

      session()->flash('misatge','Categoria Actualitzat!'); //Flash perque un cop creat es eliminat

      return redirect()->route('ruta_categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        $notes=Note::where('idcategoria','=',$id)->get();
        foreach($notes as $note){
          Note::destroy($note->id);
        }

        session()->flash('misatge','Categoria eliminada!'); //Flash perque un cop creat es eliminat

        return redirect()->route('ruta_categories');
    }
}
