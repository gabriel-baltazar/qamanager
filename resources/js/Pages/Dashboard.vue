<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="block p-6 max-w-sm bg-gray-400 rounded-lg border text-white  bg-gradient-to-br from-purple-600 to-blue-500">
                        <div class="align-middle justify-center">
                            <p class="text-center items-center text-6xl font-bold tracking-tight text-white dark:text-white">{{task}}</p>
                            <h2 class="text-center items-center text-3xl font-bold tracking-tight text-white dark:text-white">Tarefas</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
export default {
  props:{
    task: Number,
  }
}
</script>
