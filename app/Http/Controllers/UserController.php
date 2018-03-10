<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->paginate(10);

        return view('admin.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar dades obtingudes del formulari.
        $data = $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'password'  => 'required|string|min:6|confirmed',
        ]);

        // Crear l'usuari (la validació ha sortit bé).
        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']) // Encriptat.
        ]);

        // TODO: Assignar rols.

        // Vista on es llisten els usuaris.
        return redirect()->action('UserController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Obtenir l'usuari.
        $user = User::findOrFail($id);

        return view('admin.users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Obtenir l'usuari.
        $user = User::findOrFail($id);

        return view('admin.users.edit', ['user' => $user]);
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
        // Obtenir l'usuari.
        $user = User::findOrFail($id);

        // Validar dades obtingudes del formulari.
        $data = request()->validate([
          'name'     => 'required|string|max:255',
          'email'    => [
            'required',
            'string',
            'email',
            'max:255',
            // Ignorem les dades de l'usuari que s'està editant.
            Rule::unique('users')->ignore($user->id)
          ],
          'password' => 'string|min:6|confirmed' // No obligatori
        ]);

        // Si el camp Password és null (no és required).
        if ($data['password'] != null) {
            // Encriptar password en cas de que s'hagi inserit.
            $data['password'] = bcrypt($data['password']);
        } else {
            // Treiem del array $data en cas de que no s'hagi inserit.
            unset($data['password']);
        }

        // Actualitzar l'usuari.
        $user->update($data);

        // TODO: determinal el rol.

        // Vista on es llisten els usuaris.
        return redirect()->action('UserController@index');
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
