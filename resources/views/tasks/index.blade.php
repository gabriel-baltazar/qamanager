<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Tarefas') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mb-10 mx-auto sm:px-6 lg:px-8">
      <a class="text-white  bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" href="{{url('tarefa/nova')}}">Nova Tarefa</a>
    </div>
  
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                  <th scope="col" class="px-6 py-3">
                    ID
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Nome
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Descrição
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Status
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Usuário
                  </th>
                  <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Editar</span>
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach($tasks as $key => $task)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                    {{$task->id}}
                  </th>
                  <td class="px-6 py-4">
                    {{$task->name}}
                  </td>
                  <td class="px-6 py-4">
                    {{$task->description}}
                  </td>
                  <td class="px-6 py-4">
                    {{$task->status}}
                  </td>
                  <td class="px-6 py-4">
                    {{$users[$task->user_id]}}
                  </td>
                  <td class="px-6 py-4 text-right">
                    <a href="{{route('editarTarefa', $task->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>

</x-app-layout>