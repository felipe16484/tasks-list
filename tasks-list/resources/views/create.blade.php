<x-app-layout>
    <x-slot name="header">        
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            Crear Nueva Tarea
        </h2>    
    </x-slot>
    
    @if ($errors->any())
        <div class="bg-red-500 text-center py-2">
            <div class="">
                <strong>¡Ups!</strong> Algo salió mal..<br><br>
            </div>
            <div class="">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>   
        </div>
    @endif

    <form action="{{ route('tasks.store')}}" method="POST" class="flex justify-center mt-10">
        @csrf
        <div class="flex flex-col items-center gap-5">
            
            <div class="flex flex-row items-center justify-center text-right gap-5">
                <strong class="w-36 text-gray-300">Título:</strong>
                <input type="text" name="title" placeholder="Título" class="text-sm w-64 rounded-md">
            </div>

            
            <div class="flex flex-row items-center justify-center text-right gap-5">
                <strong class="w-36 text-gray-300">Descripción:</strong>
                <textarea name="description" placeholder="Descripción..." class="text-sm w-64 rounded-md h-60"></textarea>
            </div>

            
            <div class="flex flex-row items-center justify-center text-right gap-5">
                <strong class="w-36 text-gray-300">Fecha vencimiento:</strong>
                <input type="date" name="expiration_date" id="" class="text-sm w-64 rounded-md">
            </div>
            
            <div class="flex flex-row items-center justify-center text-right gap-5">
                <strong class="w-36 text-gray-300">Estado:</strong>
                <select name="status" id="" class="text-sm w-64 rounded-md">
                    <option value="" selected>Elige el estado</option>
                    <option value="Pendiente">Pendiente</option>
                    <option value="En progreso">En progreso</option>
                    <option value="Completada">Completada</option>
                </select>
            </div>

            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <input type="hidden" name="info_message" value="¡Tu tarea ha sido creada satisfactoriamente!">

            <div class="mt-5 bg-gray-800 py-2 px-5 rounded-md text-white hover:scale-105 cursor-pointer ease-in duration-100">
                <button type="submit">Crear</button>
            </div>

        </div>
    </form>

</x-app-layout>
