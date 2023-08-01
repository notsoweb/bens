<script setup>
import Layout from '@/Layouts/AppLayout.vue';
import Card from '../Elements/Card.vue';

</script>

<template>
    <Layout>
        <div class="flex w-full py-4">
            <h2 class="font-bold text-left text-xl text-gray-700">Servicios</h2>
        </div>
        <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <Card
                src="/storage/images/productos1.png"
                title="Servicio 1"
            />
            <Card
                src="/storage/images/productos1.png"
                title="Servicio 2"
            />
            <Card
                src="/storage/images/productos1.png"
                title="Servicio 3"
            />
            <Card
                src="/storage/images/productos1.png"
                title="Servicio 4"
            />
        </div>
    </Layout>
</template>