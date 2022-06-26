<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="block p-6 max-w-sm bg-gray-400 rounded-lg border text-white  bg-gradient-to-br from-purple-600 to-blue-500">
                        <div class="align-middle justify-center">
                            <!-- <svg class="w-24 h-24 stroke-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg> -->
                            <p class="text-center items-center text-6xl font-bold tracking-tight text-white dark:text-white">{{$task}}</p>
                            <h2 class="text-center items-center text-3xl font-bold tracking-tight text-white dark:text-white">Tarefas</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
