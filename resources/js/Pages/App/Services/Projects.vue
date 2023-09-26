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
                    <h4 class="text-2xl font-bold text-gray-500">Proyectos</h4>
                    <div class="space-y-4 text-gray-500 tracking-wide leading-relaxed">
                        <p>
                            Diseñamos proyectos eficientes y operativos, para que nuestros clientes satisfagan sus demandas de energía
                            a través de instalaciones seguras y económicas viables.
                        </p>
                        <p>
                            Nuestro departamento de ingeniería trabaja arduamente para que las instalaciones propuestas siempre vayan de acuerdo
                            a las normas vigentes en el ramo eléctrico.
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <img src="/storage//images/servicios2.png" />
            </div>
        </section>
    </Layout>
</template>