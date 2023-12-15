<script setup>
import Layout from '@/Layouts/AppSpaceLayout.vue';
import Menu from './Elements/Menu.vue';

</script>

<template>
    <Layout>
        <Menu />
        <section class="grid grid-cols-1 lg:gap-4 lg:grid-cols-2">
            <div class="space-y-4 md:px-4">
                <h4 class="text-2xl font-bold text-gray-500">Historia</h4>
                <div class="space-y-4 text-gray-500 tracking-wide leading-relaxed">
                    <p class="text-justify">
                        Somos una empresa que nace de la gran demanda que existe dentro del ramo de la 
                        construcción por contar con un brazo ejecutor que auxilie a las distintas constructoras en sus 
                        necesidades de ingeniería eléctrica especializada, de forma responsable, eficaz y confiable. 
                    </p>
                    <p class="text-justify">
                        A lo largo de los años hemos ampliado nuestro campo de acción dentro del ramo energético 
                        para proveer a nuestros clientes, soluciones integrales que los ayuden a realizar sus proyectos 
                        de la manera mas eficiente al poder contar con una gama amplia de servicios que los oriente 
                        en la toma de decisiones. 
                    </p>
                    <p class="text-justify">
                        Nos regimos por un principio muy sencillo: <span class="underline">"Interiorizar los objetivos de nuestros clientes como nuestros"</span>.
                        Lo cual nos ha permitido tener muy claros nuestros valores y lineas de acción.
                    </p>
                </div>
            </div>
            <div>
                <img src="/storage//images/conocenos1.png" />
            </div>
        </section>
    </Layout>
</template>