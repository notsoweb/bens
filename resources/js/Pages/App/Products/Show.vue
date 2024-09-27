<script setup>
import { ref } from 'vue';
import Layout from '@/Layouts/AppSpaceLayout.vue';

const counter = ref(1);

function increment() {
    counter.value++;
}

function decrement() {
    if (counter.value > 1) {
        counter.value--;
    }
}

</script>

<template>
    <Layout>
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row space-x-4">
                <!-- Imagen del producto -->
                <div class="md:w-1/2 mb-4 md:mb-0">
                    <img src="/storage/images/productos0.png" alt="Nombre del Producto" class="w-full h-auto object-cover rounded-lg shadow-md">
                </div>
                
                <!-- Detalles del producto -->
                <div class="md:w-1/2 md:pl-8">
                    <h1 class="text-3xl font-bold mb-4">NOMBRE DEL PRODUCTO</h1>
                    <p class="text-gray-600 mb-4">Nombre del Vendedor: Luis Álvarez</p>
                    
                    <!-- Contador de cantidad -->
                    <div class="flex items-center mb-4">
                        <button @click="decrement" class="bg-gray-200 text-gray-700 px-3 py-1 rounded-l-lg hover:bg-gray-300">-</button>
                        <span class="bg-gray-100 px-4 py-1">{{ counter }}</span>
                        <button @click="increment" class="bg-gray-200 text-gray-700 px-3 py-1 rounded-r-lg hover:bg-gray-300">+</button>
                    </div>
                    
                    <!-- Descripción -->
                    <p class="text-gray-700 mb-6">
                        Descripción: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor. Adipisicing elit, sed do eiusmod tempor.
                    </p>
                    
                    <!-- Botones de acción -->
                    <div class="flex space-x-4">
                        <button class="w-1/2 bg-gray-500 text-white px-6 py-2 hover:bg-gray-600 transition duration-300">
                            AGREGAR A CARRITO
                        </button>
                        <button class="w-1/2 bg-teal-500 text-white px-6 py-2 hover:bg-teal-600 transition duration-300">
                            PRESUPUESTAR
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Productos relacionados -->
            <div class="mt-12">
                <h2 class="text-2xl font-bold mb-6">PRODUCTOS RELACIONADOS</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img :src="`/storage/images/productos0.png`" :alt="`Producto 1`" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold mb-2">Producto 1</h3>
                            <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img :src="`/storage/images/productos1.png`" :alt="`Producto 2`" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold mb-2">Producto 2</h3>
                            <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img :src="`/storage/images/productos2.png`" :alt="`Producto 3`" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold mb-2">Producto 3</h3>
                            <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img :src="`/storage/images/productos3.png`" :alt="`Producto 4`" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold mb-2">Producto 4</h3>
                            <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>