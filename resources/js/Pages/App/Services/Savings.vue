<script setup>
import Layout from '@/Layouts/AppSpaceLayout.vue';
import Menu from './Elements/Menu.vue';

</script>

<template>
    <Layout>
        <Menu />
        <section class="space-y-4">
            <h4 class="text-2xl font-bold text-gray-500">Ahorro de energía</h4>
            <p class="text-gray-500">
                Con motivo de nuestra experiencia en el ramo eléctrico y la búsqueda continua por que nuestros clientes tengan ahorros en sus consumos, hemos
                dedicado un área especializada en buscar, proponer y ejecutar opciones que generen ahorro de energía. Es por ello que dominamos distintas formar
                de conseguirlo.
            </p>
            <ul class="space-y-4 text-gray-500 tracking-wide leading-relaxed">
                <li>
                    <h4 class="font-bold text-app-secondary">7.1 Energías Renovables</h4>
                    <p>
                        Sin lugar a dudas una de las opciones más populates para ahorrar dinero en el pago de la energía debido a los procesos limpios con los que se genera.
                        Realizamos sistema fotovoltaicos para casa habitación e industria. Utilizamos paneles solares e inversores de la más alta calidad para lograr una mayor
                        eficiencia a través de largos periodos de utilización. Contamos con distintas opciones para instalarlos, ya sea en techos, suelo o superficies irregulares.
                        También contamos con experiencia en la generación eólica, hemos desarrollado proyectos para la implementación de grandes granjas de viento.
                    </p>
                </li>
                <li>
                    <h4 class="font-bold text-app-secondary">7.2 Proyectos de cogeneración</h4>
                    <p>
                     
                    </p>
                </li>
                <li>
                    <h4 class="font-bold text-app-secondary">7.3 Iluminación LED</h4>
                    <p>
                        Ya sea iluminación industrial o pública (iluminarias públicas), contamos con experiencia para instalar grandes cantidades de iluminarias en el menor tiempo
                        posible, a través de la coordinación de varias de nuestras cuadrillas.
                    </p>
                </li>
            </ul>
            <div class="flex w-full justify-center">
                <img src="/storage/images/servicios9.png" />
            </div>
        </section>
    </Layout>
</template>