<script setup>
import Layout from '@/Layouts/AppLayout.vue';
import Menu from './Elements/Menu.vue';

</script>

<template>
    <Layout>
        <Menu />
        <section class="grid grid-cols-1 lg:gap-4 lg:grid-cols-2">
            <div class="space-y-4 md:px-4">
                <h4 class="text-2xl font-bold text-gray-500">Historia</h4>
                <div class="space-y-4 text-gray-500 tracking-wide leading-relaxed">
                    <p>
                        Somos una gran empresa que nade de la gran demanda que existe dentro del ramo de la
                        construcción por contar con un brazo ejecutor que auxilie a las distintas desarrolladoras en
                        sus necesidades de ingeniería eléctrica especializada, de forma responsable, confiable, honesta
                        y eficaz.
                    </p>
                    <p>
                        A lo largo de los años hemos ampliado nuestros campos de acción dentro del ramo energético para proveer
                        a nuestros clientes de soluciones integrales que los ayuden a realizar sus proyectos de la manera más
                        eficiente al poder contar con una amplia gama de servicios que los oriente en la toma de decisiones.
                    </p>
                    <p>
                        Nos regimos por un principio muy sencillo: "Interiorizar los objetivos de nuestros clientes como nuestros".
                        Esto nos ha permitido tener muy claros nuestros valores y lineas de acción.
                    </p>
                </div>
            </div>
            <div>
                <img src="/storage//images/conocenos1.png" />
            </div>
        </section>
    </Layout>
</template>