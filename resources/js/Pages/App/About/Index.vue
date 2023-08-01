<script setup>
import Layout from '@/Layouts/AppLayout.vue';
import Menu from './Elements/Menu.vue';

</script>

<template>
    <Layout>
        <Menu />
        <section class="grid grid-cols-1 lg:gap-4 lg:grid-cols-2">
            <div class="space-y-4 md:px-4">
                <h4 class="text-2xl font-bold text-gray-500">Presentación</h4>
                <div class="space-y-4 text-gray-500 tracking-wide leading-relaxed">
                    <p>
                        Somos una empresa del ramo de la construcción especializada en la proyección, gestión
                        ejecución y supervisión de instalaciones eléctricas.
                    </p>
                    <p>
                        Desarrollamos proyectos eléctricos Comerciales, Industriales, Habitacionales, Turísticos,
                        y de Urbanización e Infraestructura a lo largo de todo el país, para clientes del sector
                        público y privado.
                    </p>
                    <p>
                        Trabajamos con empresas nacionales y extranjeras para contribuir de forma moderna y responsable
                        en el crecimiento de la red eléctrica nacional.
                    </p>
                    <p>
                        Ejecutamos obras en alta, media y baja tensión, cubriendo asi la generación, transmisión y distribución de energía.
                    </p>
                </div>
            </div>
            <div>
                <img src="/storage//images/conocenos1.png" />
            </div>
        </section>
    </Layout>
</template>