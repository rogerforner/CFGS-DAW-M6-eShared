<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Validation\Rule;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::find($id);
          return view('user.profile.show', ['user' => $user]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user=User::find($id);
        return view('user.profile.edit', ['user' => $user]);

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
      // Validar formulari.
      $user=User::find($id);
      $data = request()->validate([
       'name'     => 'required',
       'email'    => [
         'required',
         'email',
         Rule::unique('users')->ignore($user->id) // Ignorem email del propi usuari.
       ],
       'password' => ''
      ]);
      // El password serà opcional.
      if ($data['password'] != null) {
        // Encriptar password pq sinó ens dóna un error.
        $data['password'] = bcrypt($data['password']);
      } else {
        // Treiem del array $data el password.
        unset($data['password']);
      }
      // Actualitzar dades.
      $user->update($data);
      return redirect()->route('profile.show', ['user' => $user]);
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
