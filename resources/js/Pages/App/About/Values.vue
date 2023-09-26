<script setup>
import Layout from '@/Layouts/AppSpaceLayout.vue';
import Menu from './Elements/Menu.vue';

</script>

<template>
    <Layout>
        <Menu />
        <section class="space-y-4">
            <h4 class="text-2xl font-bold text-gray-500">Valores</h4>
            <ul class="list-inside list-decimal space-y-4 text-gray-500 tracking-wide leading-relaxed">
                <li>
                    <b>Rapidez: </b> Tenemos en cuenta que lo más importante son los tiempos de ejecución pues derivado de
                    los resultados los distintos proyectos ganan o pierden rentabilidad. Ya sea en la proyección, construcción o
                    liberación de nuestros proyectos, en Bens Electric nos esforzamos por reducir los tiempos al mínimo posible
                    para cumplir con los tiempos de entrega.
                </li>
                <li>
                    <b>Viabilidad: </b> Sabemos que muchos proyectos se pueden definir dependiendo del costo de las instalaciones.
                    Para ello nosotros siempre nos esmeramos en proponer y lograr ejecutar la obra que mayor rentabilidad deje a
                    nuestros clientes.
                </li>
                <li>
                    <b>Seguridad: </b> La ingeniería eléctrica es un ramo que requiere de una preparación y conocimiento muy específico
                    y especializado por los peligros que supone. Nuestros ingenieros y técnicos cuentan con los años de experiencia para
                    asegurar  que las instalaciones que entregamos sean completamente confiables y seguras sin importar el paso del tiempo.
                </li>
            </ul>
            <div>
                <p class="space-y-4 text-gray-500 tracking-wide leading-relaxed">
                    Para poder cumplir con nuestras premisas hemos dividido a nuestra empresa en departamentos sumamente definidos que se
                    enfocan en distintos aspectos de un proyecto para que este se realice de forma rápida, segura y viable.

                </p>
            </div>
            <div class="flex w-full justify-center">
                <img src="/storage/images/conocenos4.png" />
            </div>
        </section>
    </Layout>
</template>