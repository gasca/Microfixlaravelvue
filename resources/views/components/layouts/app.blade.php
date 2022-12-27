<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Microfix - {{$tittle ?? 'Soluciones en Tecnologías'}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="description" content="{{$metaDescription ?? "Microfix Tecnologia en Cómputo"}}">
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-100">

{{-- Header contiene el logo y el menu nav --}}
{{-- sera flex en columnas con pading top 2 y bottom 2 altura de 40 -10rem, centrado y margin auto */  --}}
<header class=
     "flex-col bg-white pt-2 pb-2 px-6 h-44 space-y-1  shadow items-center m-auto w-11/12">

    {{-- imagen tendra un link a la pagina principal, sera centrado pxy  --}}
        <a href="" class="flex bg-slate-100 items-center justify-center">
            <img class="h-24  duration-300 hover:rotate-6" src="/img/microfixcolor.png" alt="logo microfix">
        </a>
        <x-layouts.nav></x-layouts.nav>

    </header>

   {{$slot}}

   @vite('resources/js/app.js')
   <script src= "js/typed.js@2.0.js"></script>
   <script src="js/main.js"></script>
</body>
</html>

