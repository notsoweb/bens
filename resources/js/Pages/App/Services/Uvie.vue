<script setup>
import Layout from '@/Layouts/AppSpaceLayout.vue';
import Menu from './Elements/Menu.vue';

</script>

<template>
    <Layout>
        <Menu />
        <section class="grid grid-cols-1 lg:gap-4 lg:grid-cols-2">
            <div class="space-y-4 md:px-4">
                <h4 class="text-2xl font-bold text-gray-500">UVIE</h4>
                <div class="space-y-4 text-gray-500 tracking-wide leading-relaxed">
                    <p>
                        Contamos con un perito avalado por la Secretaría de Energía para realizar
                        verificaciones de instalaciones eléctricas y así poder emitir dictámenes que
                        certifiquen la seguridad de los proyectos.
                    </p>
                </div>
            </div>
            <div>
                <img src="/storage//images/servicios7.png" />
            </div>
        </section>
    </Layout>
</template>