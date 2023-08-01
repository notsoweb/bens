<script setup>
import Layout from '@/Layouts/AppLayout.vue';
import Menu from './Elements/Menu.vue';

</script>

<template>
    <Layout>
        <Menu />
        <section class="grid grid-cols-1 lg:gap-4 lg:grid-cols-2">
            <div class="md:px-4 space-y-8">
                <div class="space-y-4">
                    <h4 class="text-2xl font-bold text-gray-500">Misión</h4>
                    <div class="space-y-4 text-gray-500 tracking-wide leading-relaxed">
                        <p>
                            Contribuir activamente al desarrollo de una red eléctrica nacional moderna y segura.
                        </p>
                    </div>
                </div>
                <div class="space-y-4">
                    <h4 class="text-2xl font-bold text-gray-500">Visión</h4>
                    <div class="space-y-4 text-gray-500 tracking-wide leading-relaxed">
                        <p>
                            Diversificar y ampliar continuamente nuestra gama de productos y servicios dentro del ramo
                            eléctrico para satisfacer todas las necesidades en materia energética de nuestros clientes.
                        </p>
                        <p>
                            Desarrollar todas nuestras instalaciones con los más altos estándares de calidad para que las mismas
                            sean confiables y duraderas.
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <img src="/storage//images/conocenos1.png" />
            </div>
        </section>
    </Layout>
</template>