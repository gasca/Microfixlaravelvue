        <x-layouts.app
        title="Modificar usuario"
        meta-Descripcion="Modificar usuario"
            >

       <h4 class=" text-cyan-900 text-2xl text-center">{{$title}}</h4>

        <div class="block p-10 w-3/4 m-auto items-center" >



            <form class="space-y-2"
            method="POST"
            action="{{route('users.update')}}"
            enctype="multipart/form-data"
            >
        @csrf
        {{-- {{csrf_field()}} --}}

        @include('components.layouts.userForm')



            </form>

            </div>

</x-layouts.app>



