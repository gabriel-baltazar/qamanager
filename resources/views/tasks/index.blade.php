<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Tarefas') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mb-10 mx-auto sm:px-6 lg:px-8">
      <a class="text-white  bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-bold rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" href="{{url('tarefa/nova')}}">Nova Tarefa</a>
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
                <th scope="col" class="px-6 py-3">
                  <span class="sr-only">Remover</span>
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
                  <a href="{{route('editarTarefa', $task->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg></a>
                </td>
                <td class="px-6 py-4 text-right">
                  <a id='taskDelete' data-modal-toggle="popup-modal" class="font-medium text-red-400 dark:text-red-500 hover:underline"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg></a>
                  <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center" aria-hidden="true">
                    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                          <svg class="w-5 h-5 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                          </svg>
                        </button>
                        <div class="p-5 text-center">
                          <svg class="mx-auto mb-4 w-14 h-14 text-red-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                          </svg>
                          <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Tem certeza de que deseja excluir esta tarefa ?</h3>
                          <form action="/tarefa/{{$task->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" data-modal-toggle="popup-modal" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-bold rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                              Sim, Gostaria
                            </button>
                            <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-400 hover:bg-red-100 focus:ring-4 focus:outline-none focus:ring-red-200 rounded-lg border border-red-200 text-sm font-bold px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-red-700 dark:text-red-300 dark:border-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-600">Não, Cancelar</button>
                          </form>
                          </div>
                      </div>
                    </div>
                  </div>
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