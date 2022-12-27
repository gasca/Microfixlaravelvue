<x-layouts.app
tittle="Usuario {{$user->id}}"
meta-Descripcion="Usuarios de Microfix"

>



<div class="block space-y-2 p-10 w-11/12 m-auto items-center" >


        <table class="border-separate border-spacing-2 p-3 border text-center border-slate-500" >
        <thead>
            <tr>
            <th class="border border-b-amber-300">#</th>
            <th class="border border-b-amber-300">Nombre</th>
            <th class="border border-b-amber-300">Apellidos</th>
            <th class="border border-b-amber-300">Correo</th>
            <th class="border border-b-amber-300">Password</th>
            <th class="border border-b-amber-300">Ciudad</th>
            <th class="border border-b-amber-300">Colonia</th>
            <th class="border border-b-amber-300">Direccion</th>
            <th class="border border-b-amber-300">Celular</th>

            </tr>
        </thead>
        <tbody>

            <tr>
            <th class="border border-b-amber-300">{{$user->id}}</th>
            <td class="border border-b-amber-300">{{$user->nombre}}</td>
            <td class="border border-b-amber-300">{{$user->apellidos}}</td>
            <td class="border border-b-amber-300">{{$user->correo}}</td>
            <td class="border border-b-amber-300">{{$user->password}}</td>
            <td class="border border-b-amber-300">{{$user->ciudad}}</td>
            <td class="border border-b-amber-300">{{$user->colonia}}</td>
            <td class="border border-b-amber-300">{{$user->direccion}}</td>
            <td class="border border-b-amber-300">{{$user->Celular}}</td>
            <td class="border border-b-amber-300">


                                <form action="{{ route('users.destroy', $user) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    {{-- {{csrf_field()}}
                                    {{method_field('DELETE')}} --}}

                                    <a href="{{ route('users.show', $user) }}"
                    class="btn btn-link"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg>
                    </a>
                                <a href="{{ route('users.edit', $user) }}" class="btn btn-link"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                    <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                    </svg></a>
                                    <button type="submit" class="btn btn-link"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>
                    </button>

                                </form>

            </td>
            </tr>


        </tbody>
        </table>


</div>

    <p>
        {{-- <a href="{{ url('/usuarios') }}"> Regresar a Lista </a> --}}
        <a href="{{ route('users.index') }}"> Regresar a Lista </a>
    </p>

</x-layouts.app>

