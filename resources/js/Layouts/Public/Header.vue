<script setup>
import { Link } from '@inertiajs/vue3';

import Item from '@/Components/App/Skeleton/Header/Item.vue'

</script>

<template>
    <header class="mx-auto container flex flex-col lg:flex-row space-y-4 lg:space-y-0 justify-between items-center p-4">
        <img src="/storage/images/logo_bens_electric.png" class="h-12">
        <Link :href="route('app.donation')">
        <button type="button" class="flex py-2 px-4 h-fit space-x-3 font-semibold bg-app-primary text-white rounded-xl">
            <img class="w-6" src="/storage/images/ico-fundacion.png"><span>Donativos para Fundación BENS Electric</span> 
        </button>
        </Link>
    </header>
    <nav class="bg-app-secondary">
        <ul class="cx-auto flex items-center text-white">
            <Item to="app.index">
                Inicio
            </Item>
            <Item to="app.about">
                Nosotros
            </Item>
            <Item to="app.services">
                Servicios
            </Item>
            <Item to="app.products.index">
                Productos
            </Item>
            <Item to="app.contact">
                Contacto
            </Item>
        </ul>
    </nav>
</template>
