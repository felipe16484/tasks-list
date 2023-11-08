<x-app-layout>
    <x-slot name="header">
        <div class="grid grid-flow-col justify-stretch">
            <div class="flex justify-end items-center">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
                    Lista de Tareas
                </h2>
            </div>            
            <div class="flex justify-end pr-3">
                
            </div>
        </div>
    </x-slot>

    @if (Session::get('success'))
      <div class="bg-green-500 text-center py-2">
        <strong>{{ Session::get('success') }}</strong>
      </div>
    @endif

    <div class="flex flex-col justify-center my-4">
        <table class="table-fixed">
          <thead class="text-gray-200">
            <tr>
              <th class="px-2 py-1">Título</th>
              <th class="px-2 py-1 max-w-xs">Descripción</th>
              <th class="px-2 py-1">Fecha de Vencimiento</th>
              <th class="px-2 py-1">Estado</th>
              <th class="px-2 py-1">Acciones</th>
            </tr>
          </thead>
          <tbody class="text-gray-400">
            @foreach ($tasks as $task)
              <tr class="text-center gap-4">
                <td class="px-2 py-1">{{$task->title}}</td>
                <td class="px-2 py-1 max-w-xs">{{$task->description}}</td>
                <td class="px-2 py-1">{{$task->expiration_date}}</td>
                <td class="px-2 py-1">{{$task->status}}</td>
                <td class="px-2 py-1 ">
                  <div class="flex flex-row items-center justify-center gap-4">
                    <a href="{{ url('tasks/'.$task->id.'/edit') }}" class="hover:scale-125 ease-in-out duration-300 cursor-pointer" title="Editar">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="#ffffff" d="M6 22q-.825 0-1.413-.588T4 20V4q0-.825.588-1.413T6 2h8l6 6v3q-.575.125-1.075.4t-.925.7l-6 5.975V22H6Zm8 0v-3.075l5.525-5.5q.225-.225.5-.325t.55-.1q.3 0 .575.113t.5.337l.925.925q.2.225.313.5t.112.55q0 .275-.1.563t-.325.512l-5.5 5.5H14Zm6.575-5.6l.925-.975l-.925-.925l-.95.95l.95.95ZM13 9h5l-5-5l5 5l-5-5v5Z"/></svg>
                    </a>

                    <form class="hover:scale-125 transition-all" action="{{ url('tasks/'.$task->id ) }}" method="post" onsubmit="return confirm('¿Estás seguro que deseas eliminar la tarea?');" title="Eliminar">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{ $task->id }}">
                        <button type="submit" class="flex items-center">
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="#ffffff" d="M7 21q-.825 0-1.413-.588T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.588 1.413T17 21H7Zm2-4h2V8H9v9Zm4 0h2V8h-2v9Z"/></svg>
                        </button>
                    </form>

                  </div>
                </td>
              </tr>
            @endforeach
                          
          </tbody>
        </table>

        <div class="fixed bottom-0 w-full">
          {{ $tasks->links() }}
        </div>

    </div>

    
    
</x-app-layout>
