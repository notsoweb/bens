<script setup>
import Layout  from '@/Layouts/AppLayout.vue';
import AwsIcon from '@/Components/Shared/AwsIcon.vue';

</script>

<template>
    <Layout>
        <div class="w-full py-8 grid gap-16 grid-cols-1 md:grid-cols-2">
            <div class="flex flex-col w-full space-y-4 text-gray-500">
                <h4 class="text-2xl font-bold text-gray-800">Contacto</h4>
                <p>
                    <b>Dirección:</b> Concepción Beistegui 103 Piso 6, Col. Del Valle Deleg. Benito Juarez, Ciudad de México.
                </p>
                <p>
                    <b>Teléfonos:</b> <a href="tel:5567195590">(55) 6719 5590</a> / <a href="tel:5567195591">(55) 6719 5591</a>
                </p>
                <p>
                    <b>Correo:</b> <a href="mailto:info@benselectric.com">info@benselectric.com</a>
                </p>
                <p>
                    <b>CP:</b> 03100
                </p>
                <div class="flex flex-col space-y-4">
                    <a class="space-x-2 underline">
                        <AwsIcon 
                            name="facebook-f" 
                        />
                        <span>Facebook</span>
                    </a>
                    <a class="space-x-2 underline">
                        <AwsIcon 
                            name="twitter" 
                        />
                        <span>Twitter</span>
                    </a>

                </div>
            </div>
            <div class="flex flex-col w-full space-y-8">
                <h4 class="text-2xl font-bold text-gray-800">Escríbenos</h4>
                <div class="space-y-8">
                    <input 
                        class="w-full pb-1 border-b-2 border-app-secondary outline-0"
                        type="text"
                        placeholder="Nombre:"
                    />
                    <input 
                        class="w-full pb-1 border-b-2 border-app-secondary outline-0"
                        type="text"
                        placeholder="Correo:"
                    />
                    <textarea 
                        class="w-full pb-1 border-b-2 border-app-secondary outline-0"
                        type="text"
                        rows="5"
                        placeholder="Mensaje:"
                    ></textarea>
                </div>
                <button class="py-4 px-8 rounded-lg bg-[#CA004E] text-white">
                    Enviar
                </button>
            </div>
        </div>
    </Layout>
</template>