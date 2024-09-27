<script setup>
import GoogleIcon from '@/Components/Shared/GoogleIcon.vue';
import Layout     from '@/Layouts/AppSpaceLayout.vue';
import Card       from '../Elements/Card.vue';

</script>

<template>
    <Layout>
        <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <div class="w-full bg-white shadow-md rounded-lg overflow-hidden">
              <div class="p-4">
                <select class="w-full p-1.5 outline-none  bg-gray-500 text-white">
                    <option value="1">Ordenar por</option>
                    <option value="2">Ordenar por</option>
                    <option value="3">Ordenar por</option>
                </select>
              </div>
              <div class="p-4 space-y-3">
                <div v-for="(category, index) in ['Cajas', 'Transformadores', 'Tableros', 'Registros']" :key="index" class="border-b border-gray-200 pb-2">
                  <button class="w-full flex justify-between items-center text-left">
                    <span class="text-gray-700">{{ category }}</span>
                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                </div>
                <div class="space-y-2 pt-2">
                  <label class="flex items-center space-x-2 text-gray-700" v-for="(option, index) in ['Opción 1', 'Opción 2', 'Opción 3']" :key="index">
                    <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                    <span>{{ option }}</span>
                  </label>
                    </div>
                </div>
                <div class="p-4">
                    <button class="w-full bg-gray-500 text-white py-2 px-4 hover:bg-gray-700 transition duration-300">
                        Filtrar
                    </button>
                </div>
            </div>
            <div class="lg:col-span-2 xl:col-span-3 space-y-4">
                <h4 class="text-xl">CATÁLOGO DE PRODUCTOS</h4>
                <div class="relative bg-gray-200 rounded-md">
                    <input
                        class="w-full py-1.5 pl-8 pr-16 border-none outline-none rounded-md bg-transparent text-gray-700"
                        placeholder="Buscar producto"
                        type="text"
                    >
                    <GoogleIcon
                        class="absolute left-2 top-1 text-xl text-gray-500"
                        name="search"
                    />
                </div>
                <div class="grid gap-4 grid-cols-1 lg:grid-cols-2 xl:grid-cols-3">
                    <Card
                        src="/storage/images/productos0.png"
                        title="Transformadores"
                    />
                    <Card
                        src="/storage/images/productos1.png"
                        title="Cable"
                    />
                    <Card
                        src="/storage/images/productos2.png"
                        title="Plantas de emergencia"
                    />
                    <Card
                        src="/storage/images/productos5.jpg"
                        title="Generadores de energía"
                    />
                    <Card
                        src="/storage/images/productos4.jpg"
                        title="Luminarias LED"
                    />

                </div>
            </div>
        </div>
    </Layout>
</template>