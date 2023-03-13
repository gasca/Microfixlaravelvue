<x-layouts.app
tittle="Registro de usuario"
meta-Descripcion="Registro de usuarios"
>
<h4 class=" text-cyan-900 text-2xl text-center">{{$title}}</h4>

<div class="block p-10 w-3/4 m-auto items-center" >



    <form class="space-y-2"
    method="POST"
    action="{{route('equipo.store')}}"
    enctype="multipart/form-data"
    >
        @csrf
        {{-- {{csrf_field()}} --}}

        @include('components.layouts.userForm')



    </form>

    </div>
</x-layouts.app>


