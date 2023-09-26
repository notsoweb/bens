<script setup>
import Item from './ItemMenu.vue';

</script>

<template>
    <ul class="flex py-4 justify-center items-center space-x-8 text-gray-500">
            <Item href="app.services">
                Instalaciones eléctricas
            </Item>
            <Item href="app.services.projects">
                Proyectos
            </Item>
            <Item href="app.services.management">
                Gestoría
            </Item>
            <Item href="app.services.legal">
                Asesoría legal
            </Item>
            <Item href="app.services.uvie">
                UVIE
            </Item>
            <Item href="app.services.maintenance">
                Pruebas de mantenimientos
            </Item>
            <Item href="app.services.savings">
                Ahorro de energía
            </Item>
        </ul>
</template>