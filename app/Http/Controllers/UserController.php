<?php

namespace App\Http\Controllers;
use App\Models\user;
use App\Http\Requests\StoreuserRequest;
use App\Http\Requests\UpdateuserRequest;


class UserController extends Controller
{

//crear modelo con migration make:model User -m

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $title = 'Listado de usuarios';
       $users = User::all();
		return view('users.index')
        ->with('users', $users)
        ->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title ='Creación de usuario';
        $btntitle = 'Crear';
        return view('users.create')
        ->with('user', new User)
        ->with('title', $title)
        ->with('btntitle', $btntitle);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreuserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreuserRequest $request)
    {


        User::create($request->validated());
        return redirect()->route('users.index');

        //   $validacion =  $request->validate([
        //         'Nombre'=>['required'],
        //         'Apellidos'=>['required'],
        //         'Correo'=>['required'],
        //         // 'Correo'=>['required' Rule::class()unique:table,column,except,id],
        //         'Password'=>['required'],
        //         'Password2'=>['required'],
        //         'Ciudad'=>['required'],
        //         'Colonia'=>['required'],
        //         'Direccion'=>['required'],
        //         'Celular'=>['required'],
        //     ]);

            // $usuario = new User;

            // $usuario->nombre = $request->input('Nombre');
            // $usuario->apellidos = $request->input('Apellidos');
            // $usuario->correo  = $request->input('Correo');
            // $usuario->password  = $request->input('Password');
            // $usuario->ciudad  = $request->input('Ciudad');
            // $usuario->colonia  = $request->input('Colonia');
            // $usuario->direccion  = $request->input('Direccion');
            // $usuario->Celular  = $request->input('Celular');
            // $usuario->save();
                        // 2 forma de guardar datos
            // User::create([
            // 'nombre' => $request->input('Nombre'),
            // 'apellidos' => $request->input('Apellidos'),
            // 'correo'  => $request->input('Correo'),
            // 'password'  => $request->input('Password'),
            // 'ciudad'  => $request->input('Ciudad'),
            // 'colonia'  => $request->input('Colonia'),
            // 'direccion'  => $request->input('Direccion'),
            // 'Celular'  => $request->input('Celular'),

            //             ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        return view('users.show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        $title ='Editar usuario';
        $btntitle = 'Guardar Cambios';
        return view('users.create')
        ->with('user', $user)
        ->with('title', $title)
        ->with('btntitle', $btntitle);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateuserRequest  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateuserRequest $request, user $user)
    {
            $user->update($validated());
            return redirect()->route('users.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        $user->delete();
        return to_route('users.index')->with('status','Usuario Eliminado');
    }
}


