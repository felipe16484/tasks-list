<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans bg-gray-100 dark:bg-gray-900 flex flex-col">

            <div class="bg-green-500 text-center py-2">
                <strong class="text-black">{{$data['info_message']}}</strong>
            </div>                    

            <div class="flex flex-col items-center justify-center text-center mt-6">
                <strong class="w-36 text-gray-200">Título:</strong>
                <span class="text-sm w-64 rounded-md text-gray-500">{{$data['title']}}</span>
            </div>
            
            <div class="flex flex-col items-center justify-center text-center mt-6">
                <strong class="w-36 text-gray-200">Descripción:</strong>
                <label name="description" placeholder="Descripción..." class="text-sm w-64 rounded-md text-gray-500">{{$data['description']}}</label>
            </div>
            
            <div class="flex flex-col items-center justify-center text-center mt-6">
                <strong class="w-36 text-gray-200">Fecha vencimiento:</strong>
                <span class="text-sm w-64 rounded-md text-gray-500">{{$data['expiration_date']}}</span>
            </div>
            
            <div class="flex flex-col items-center justify-center text-center my-6">
                <strong class="w-36 text-gray-200">Estado:</strong>
                <span class="text-sm w-64 rounded-md text-gray-500">{{$data['status']}}</span>
            </div>

    </body>
</html>