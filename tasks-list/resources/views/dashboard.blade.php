<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            Gestor de Tareas
        </h2>
    </x-slot>
    
    <div class="flex flex-row justify-center gap-5 text-center mt-16">

      <div class="hover:scale-105 ease-in-out duration-300 cursor-pointer bg-gray-800 py-2 px-4 shadow-md rounded-md">

        <a href="{{ route('tasks.create') }}" title="Nueva tarea" class="flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20"><path d="M14.5 10a4.5 4.5 0 1 1 0 9a4.5 4.5 0 0 1 0-9zm-.25-7a2.75 2.75 0 0 1 2.745 2.582L17 5.75V9.6a5.46 5.46 0 0 0-1.185-.442l-.315-.067V5.75a1.25 1.25 0 0 0-1.122-1.244L14.25 4.5h-8.5a1.25 1.25 0 0 0-1.244 1.122L4.5 5.75v8.5c0 .647.492 1.18 1.122 1.244l.128.006h3.34c.079.424.205.832.375 1.216L9.6 17H5.75a2.75 2.75 0 0 1-2.745-2.582L3 14.25v-8.5a2.75 2.75 0 0 1 2.582-2.745L5.75 3h8.5zm.25 9a.5.5 0 0 0-.492.41L14 12.5V14h-1.5a.5.5 0 0 0-.09.992l.09.008H14v1.5a.5.5 0 0 0 .992.09L15 16.5V15h1.5a.5.5 0 0 0 .09-.992L16.5 14H15v-1.5a.5.5 0 0 0-.5-.5z" fill="#ffffff" fill-rule="nonzero"/>
          </svg>
          <div class="text-gray-400">Crear tarea</div>
        </a>

      </div>

      <div class="hover:scale-105 ease-in-out duration-300 cursor-pointer bg-gray-800 py-2 px-4 shadow-md rounded-md">

        <a href="{{route('tasks.index')}}" title="Nueva tarea" class="flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="#ffffff" d="M10 20q-.825 0-1.413-.588T8 18q0-.825.588-1.413T10 16h10q.825 0 1.413.588T22 18q0 .825-.588 1.413T20 20H10Zm0-6q-.825 0-1.413-.588T8 12q0-.825.588-1.413T10 10h10q.825 0 1.413.588T22 12q0 .825-.588 1.413T20 14H10Zm0-6q-.825 0-1.413-.588T8 6q0-.825.588-1.413T10 4h10q.825 0 1.413.588T22 6q0 .825-.588 1.413T20 8H10ZM4 8q-.825 0-1.413-.588T2 6q0-.825.588-1.413T4 4q.825 0 1.413.588T6 6q0 .825-.588 1.413T4 8Zm0 6q-.825 0-1.413-.588T2 12q0-.825.588-1.413T4 10q.825 0 1.413.588T6 12q0 .825-.588 1.413T4 14Zm0 6q-.825 0-1.413-.588T2 18q0-.825.588-1.413T4 16q.825 0 1.413.588T6 18q0 .825-.588 1.413T4 20Z"/></svg>
          </svg>
          <div class="text-gray-400">Lista de tareas</div>
        </a>

      </div>
      
    </div>
    
</x-app-layout>
