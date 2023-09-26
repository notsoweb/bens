<script setup>
import Layout from '@/Layouts/AppSpaceLayout.vue';
import Menu from './Elements/Menu.vue';

</script>

<template>
    <Layout>
        <Menu />
        <section class="grid grid-cols-1 lg:gap-4 lg:grid-cols-2">
            <div class="space-y-4 md:px-4">
                <h4 class="text-2xl font-bold text-gray-500">Asesoría legal</h4>
                <div class="space-y-4 text-gray-500 tracking-wide leading-relaxed">
                    <p>
                        Brindamos asesoría legal a nuestros clientes en caso de que hayan sido victimas de un acto de abuso
                        de autoridad por parte de la CFE.
                    </p>
                    <p>Atendemos notificaciones de ajuste que no concuerden con los consumos reales de energía.</p>
                </div>
            </div>
            <div>
                <img src="/storage//images/servicios6.png" />
            </div>
        </section>
    </Layout>
</template>