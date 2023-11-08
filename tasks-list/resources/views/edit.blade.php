<x-app-layout>
    <x-slot name="header">        
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            Modificar Tarea
        </h2>    
    </x-slot>
    
    <form action="{{ route('tasks.update', $task) }}" method="POST" class="flex justify-center mt-10">

        @csrf
        @method('PUT')

        <div class="flex flex-col items-center gap-5">
            
            <div class="flex flex-row items-center justify-center text-right gap-5">
                <strong class="w-36 text-gray-300">Título:</strong>
                <input type="text" name="title" placeholder="Título" value="{{$task->title}}" class="text-sm w-64 rounded-md">
            </div>

            
            <div class="flex flex-row items-center justify-center text-right gap-5">
                <strong class="w-36 text-gray-300">Descripción:</strong>
                <textarea name="description" placeholder="Descripción..." class="text-sm w-64 rounded-md h-60">{{$task->description}}</textarea>
            </div>

            
            <div class="flex flex-row items-center justify-center text-right gap-5">
                <strong class="w-36 text-gray-300">Fecha vencimiento:</strong>
                <input type="date" name="expiration_date" id="" value="{{$task->expiration_date}}" class="text-sm w-64 rounded-md">
            </div>
            
            <div class="flex flex-row items-center justify-center text-right gap-5">
                <strong class="w-36 text-gray-300">Estado:</strong>
                <select name="status" id="" class="text-sm w-64 rounded-md">
                    <option value="">Elige el estado</option>
                    <option value="Pendiente" @selected("Pendiente" == $task->status)>Pendiente</option>
                    <option value="En progreso" @selected("En progreso" == $task->status)>En progreso</option>
                    <option value="Completada" @selected("Completada" == $task->status)>Completada</option>
                </select>
            </div>

            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <input type="hidden" name="info_message" value="¡Tu tarea ha sido marcada como Completada!">

            <div class="mt-5 bg-gray-800 py-2 px-5 rounded-md text-white hover:scale-105 cursor-pointer ease-in duration-100">
                <button type="submit" >Actualizar</button>
            </div>

        </div>
    </form>

</x-app-layout>
