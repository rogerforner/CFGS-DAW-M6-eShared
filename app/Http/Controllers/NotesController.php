<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Note;
use \willvincent\Rateable\Rating;

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
      $rating = new \willvincent\Rateable\Rating;
      $rating->rating = 5;
      //$rating->rating = $request->rate;
      //dd($rating->rating);
      $rating->user_id = auth()->user()->id;

      $note=Note::create($inputs);
      $note->ratings()->save($rating);
      session()->flash('misatge','Nota creada!'); //Flash perque un cop creat es eliminat

      return redirect()->route('home');
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
      $note=Note::find($id);
      $categories= Category::where('pare','=',NULL)->get();

      return view('user.notes.edit')->with(['note'=>$note,'categories'=>$categories]);
    }
    public function puntuar(Request $request,$id)
    {
      $note=Note::find($id);
      $rating = new Rating;
      $category=Category::where('id',$note->idcategoria)->get();
      $r=Rating::where('user_id','=',auth()->user()->id)->where('rateable_id',$note->id)->count();

      if($r==0){
        $rating->rating = $request->input('star');
        $rating->user_id = auth()->user()->id;
        $note->ratings()->save($rating);
        return view('user.notes.show')->with(['note'=>$note]);
      }

      return view('user.notes.show')->with(['note'=>$note,'category'=>$category]);
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
      $inputs=$request->only('nom','idcategory','idusuari','note');

      $nota=Note::find($id);

      $nota->update(
        $inputs
      );

      session()->flash('misatge','Apunts actualitzats!'); //Flash perque un cop creat es eliminat

      return redirect()->route('notes.show',['note'=>$nota->id])->with(['note'=>$nota]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Note::destroy($id);

      session()->flash('misatge','Apunts eliminats!'); //Flash perque un cop creat es eliminat

      return redirect()->route('home');
    }
}
