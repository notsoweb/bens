<script setup>
import Layout from '@/Layouts/AppSpaceLayout.vue';
import Menu from './Elements/Menu.vue';

</script>

<template>
    <Layout>
        <Menu />
        <section class="grid grid-cols-1 lg:gap-4 lg:grid-cols-2">
            <div class="md:px-4 space-y-8">
                <div class="space-y-4">
                    <h4 class="text-2xl font-bold text-gray-500">Gestiones</h4>
                    <div class="space-y-4 text-gray-500 tracking-wide leading-relaxed">
                        <p>
                            Todos los proyectos que realizamos son "llave en mano", por lo que auxiliamos a nuestros clientes en sus necesidades de inicio
                            a fin, encargándonos de todos los trámites necesarios para la aprobación y liberación de todas las instalaciones eléctricas por
                            parte de las instituciones que lo requieran.
                        </p>
                        <p>
                            Llevamos una amplia relación de trabajo y colaboración con la <b>Comisión Federal de Electricidad</b> en sus distintas empresas y regiones
                            a nivel nacional. Aunado a ello nuestros proyectos nos han exigido ampliar nuestras relaciones con la <b>CRE, CENACE, SENER, FIDE, SEMARNAT</b> y <b>CONAGUA</b> con
                            las cuales interactuamos constantemente para desarrollar distintos proyectos.
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <img src="/storage//images/servicios5.png" />
            </div>
        </section>
    </Layout>
</template>