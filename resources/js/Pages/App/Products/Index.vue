<script setup>
import Layout from '@/Layouts/AppSpaceLayout.vue';
import Card from '../Elements/Card.vue';

</script>

<template>
    <Layout>
        <div class="flex w-full py-4">
            <h2 class="font-bold text-left text-xl text-gray-700">Productos</h2>
        </div>
        <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
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
    </Layout>
</template>