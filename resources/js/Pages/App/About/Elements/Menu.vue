<script setup>
import Item from './ItemMenu.vue';

</script>

<template>
    <ul class="flex py-4 justify-center items-center space-x-8 text-gray-500">
            <Item href="app.about.index">
                Presentación
            </Item>
            <Item href="app.about.history">
                Historia
            </Item>
            <Item href="app.about.mission">
                Misión y Visión
            </Item>
            <Item href="app.about.values">
                Valores
            </Item>
            <Item href="app.about.review">
                Reseña histórica
            </Item>
        </ul>
</template>