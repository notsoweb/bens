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
                <li class="text-justify">
                    <b>Confianza: </b> Nuestro mayor compromiso con nuestros clientes, es darles la certeza, que 
                    nuestros proyectos siempre estarán rigurosamente apegados a las normas vigentes, para que las instalaciones que desarrollemos, cuenten con todos los elementos necesarios para tener 
                    una red eléctrica duradera.
                </li>
                <li class="text-justify">
                    <b>Viabilidad: </b> Sabemos que las instalaciones eléctricas representan un costo significativo 
                    dentro de un proyecto, por ello, es importante para nosotros buscar proponer distintas 
                    alternativas que logren la mayor rentabilidad para nuestros clientes.
                </li>
                <li class="text-justify">
                    <b>Seguridad: </b> La ingeniería eléctrica es un ramo que requiere de una preparación y 
                    conocimiento muy específico y especializado por los peligros que supone. Nuestros ingenieros 
                    y técnicos cuentan con años de experiencia para asegurar que las instalaciones que 
                    entregamos sean completamente confiables y seguras no obstante el paso del tiempo.
                    Para poder cumplir con nuestras premisas hemos dividido a nuestra empresa en distintas 
                    áreas que se enfocan en distintos aspectos de un proyecto para que este se realice de forma 
                    rápida, segura y viable.
                </li>
            </ul>
            <div>
                <p class="text-justify text-gray-500 tracking-wide leading-relaxed">
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