<script setup>
import Layout from '@/Layouts/AppLayout.vue';
import Card from '../Elements/Card.vue';

</script>

<template>
    <Layout>
        <div class="flex w-full py-4">
            <h2 class="font-bold text-left text-xl text-gray-700">Proyectos</h2>
        </div>
        <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <Card
                src="/storage/images/productos1.png"
                title="Conexión transformador de medición"
            />
            <Card
                src="/storage/images/productos1.png"
                title="Instalación solar fotovoltaica de 500kw"
            />
            <Card
                src="/storage/images/productos1.png"
                title="Centro modular de medición"
            />
            <Card
                src="/storage/images/productos1.png"
                title="Maniobras conjuntas con CFE"
            />
            <Card
                src="/storage/images/productos1.png"
                title="Subestación compacta"
            />
            <Card
                src="/storage/images/productos1.png"
                title="Ponchado de pericos"
            />
            <Card
                src="/storage/images/productos1.png"
                title="Trailers con postes"
            />
            <Card
                src="/storage/images/productos1.png"
                title="Excavación cepa para poste"
            />
        </div>
    </Layout>
</template>