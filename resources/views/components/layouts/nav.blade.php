<div class=
"flex h-14
bg-blue-200 items-center justify-center
">
{{-- agregamos boton de menu --}}
        <button
        class="
         text-blue-500
         hover:bg-slate-900
          rounded p-1 ml-1
        focus:ring-2 focus:ring-blue-700
         "
       >
        <svg
            class="w-6 h-6"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
       </button>

{{--Agregamos menu de escritorio--}}
        <div class="items-center justify-between hidden md:flex space-x-8">

            <a
            class="text-blue-500 px-3 py-2 transition-colors hover:text-blue-900"
            href="{{route('inicio')}}">Inicio</a>

            <a
            class="text-blue-500  px-3 py-2 transition-colors hover:text-blue-900"
            href="{{route('users.create')}}">Registrar Usuario</a>
            <a
            class="text-blue-500  px-3 py-2 transition-colors hover:text-blue-900"
            href="{{route('servicios')}}">Servicios</a>
            <a
            class="text-blue-500 px-3 py-2 transition-colors hover:text-blue-900"
            href="{{route('contacto')}}">Contacto</a>
        </div>

{{--Agregamos iniciar sesión o registrarse--}}
    <div class="ml-12 bg-red-200 hidden md:flex space-x-8">

        <button   class="
        text-blue-500
        hover:bg-slate-900
        rounded p-1 ml-1
        focus:ring-2 focus:ring-blue-700
        ">
            Iniciar Sesión
        </button>

        <button   class="
        text-blue-500
        hover:bg-slate-900
        rounded p-1 ml-1
        focus:ring-2 focus:ring-blue-700
        ">
            Registrarse
        </button>
    </div>




</div>
{{--Se agrega menu movil externo al div principal--}}
    <div
        class="
        space-y-1
        border-t
        pb-3
        pt-2
        sm:hidden
        justify-items-start
        "
        >

        <a
        class="
        block
        px-3
        py-2
        rounded-md
        "
        href="{{route('inicio')}}">Inicio</a>

        <a
        class="
        block
        px-3
        py-2
        rounded-md
        transition-colors
        text-slate-700
        hover:bg-blue-700
        hover:text-white
        "
        href="{{route('users.create')}}">Registrar Usuario</a>
        <a
        class="
        block
        px-3
        py-2
        rounded-md
        transition-colors
        text-slate-700
        hover:bg-blue-700
        hover:text-white
        "
        href="{{route('servicios')}}">Servicios</a>
        <a
        class="
        block
        px-3
        py-2
        rounded-md
        transition-colors
        text-slate-700
        hover:bg-blue-700
        hover:text-white
        "
        href="{{route('contacto')}}">Contacto</a>

    </div>
