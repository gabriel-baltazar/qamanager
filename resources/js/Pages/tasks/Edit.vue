<script setup>
  import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
  import { Head } from '@inertiajs/inertia-vue3'
</script>
<template>
    <Head title="Tarefas" />
    
    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Adicionar tarefa
            </h2>
        </template>
    
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form @submit.prevent="update">
                  <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nome da tarefa</label>
                    <input type="text" name="name" id="name" v-model="form.name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nome" required>
                  </div>
                  <div class="mb-6">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Descrição da tarefa</label>
                    <textarea name="description" id="description" v-model="form.description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Descrição" required></textarea>
                  </div>
                  <div class="mb-6">
                    <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Status</label>
                    <input name="status" type="text" id="status" v-model="form.status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Status" required>
                  </div>
                  <div class="mb-6">
                    <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Usuários</label>
                    <select name="user_id" id="user_id" v-model="form.user_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option>Selecione o usuário</option>
                      <option v-for="user in users" :key="user.id" :value="user.id">{{user.name}}</option>
                    </select>
                  </div>
                  <button type="submit" class="text-white  bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-bold rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Salvar</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</BreezeAuthenticatedLayout>
</template>

<script>
  export default {
    props:{
      users: Array,
      task: Object
    },
    data() {
      return {
        form:this.$inertia.form({
          name: this.task.name,
          description: this.task.description,
          status: this.task.status,
          user_id: this.task.user_id
        }),
      }
    },
    methods:{
      update(){
        this.form.put(`/tasks/${this.task.id}`)
      }
    }
  }
</script>
