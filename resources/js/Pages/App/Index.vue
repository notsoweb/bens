<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import { Splide, SplideSlide } from '@splidejs/vue-splide';

import Layout from '@/Layouts/AppLayout.vue';
import AwsIcon from '@/Components/Shared/AwsIcon.vue';

const options = ref({
    paginationDirection: 'ttb',
    autoHeight: true,
    arrows: false
})

const options2 = ref({
    perPage: 5,
    paginationDirection: 'ttb',
    autoHeight: true,
    arrows: true
})

</script>

<template>
    <Layout>
        <div id="banner" class="flex flex-col justify-center items-center mb-8">
            <Splide
                :options="options"
                aria-label="My Favorite Images"
            >
              <SplideSlide>
                <img class="w-full h-[25rem] object-cover" src="/storage/images/slide-pic1.png" alt="Sample 1">
              </SplideSlide>
              <SplideSlide>
                <img class="w-full h-[25rem] object-cover" src="/storage/images/slide-pic2.png" alt="Sample 2">
              </SplideSlide>
              <SplideSlide>
                <img class="w-full h-[25rem] object-cover" src="/storage/images/slide-pic3.png" alt="Sample 2">
              </SplideSlide>
              <SplideSlide>
                <img class="w-full h-[25rem] object-cover" src="/storage/images/slide-pic4.png" alt="Sample 2">
              </SplideSlide>
              <SplideSlide>
                <img class="w-full h-[25rem] object-cover" src="/storage/images/slide-pic5.png" alt="Sample 2">
              </SplideSlide>
            </Splide>
            <Link :href="route('app.about')" class="py-4 px-8 -m-10 w-fit bg-[#FF0045] text-xl text-white uppercase z-10">
                Conoce más
            </Link>
        </div>
        <div class="mb-8 mt-16 w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6">
            <div class="flex flex-col w-full items-center space-y-2 bg-[#3378E8] text-white py-8">
                <div class="uppercase text-center">
                    <p class="text-xs">Siguenos por</p>
                    <p class="font-bold">FACEBOOK</p>
                </div>
                <AwsIcon 
                    title="Visitar Facebook"
                    class="circle-btn bg-[#0F55C4] text-white"
                    name="facebook-f"
                />
            </div>
            <div class="bg-cover" style="background-image: url(storage/images/conocenos3.png);"></div>
            <div class="flex flex-col items-center space-y-2 bg-[#FF773B] text-white py-8">
                <div class="uppercase text-center">
                    <p class="text-xs">Equipo de</p>
                    <p class="font-bold">Especialistas</p>
                </div>
                <button class="py-1 px-4 uppercase text-xs bg-[#FFCE00] rounded-xl">Contactanos</button>
            </div>
            <div class="bg-cover" style="background-image: url(storage/images/servicios4.png);"></div>
            <div class="flex flex-col items-center space-y-2 bg-[#3378E8] text-white py-8">
                <div class="uppercase text-center">
                    <p class="text-xs">Acciones</p>
                    <p class="font-bold">Por el beneficio de otro</p>
                </div>
                <button class="py-1 px-4 uppercase text-xs bg-[#2FD8D3] rounded-xl">Contactanos</button>
            </div>
            <div class="bg-cover" style="background-image: url(storage/images/pic-home3.png);"></div>
        </div>
        <div class="mb-8 mt-16 grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
            <div class="flex flex-col items-center">
                <span class="font-bold text-4xl text-[#FF0045]">+55</span>
                <p class="font-bold">mil</p>
                <p>proyectos de iluminación</p>
            </div>
            <div class="flex flex-col items-center">
                <span class="font-bold text-4xl text-[#FF0045]">+2000</span>
                <p class="font-bold">mil</p>
                <p>proyectos de energía renovable</p>
            </div>
            <div class="flex flex-col items-center">
                <span class="font-bold text-4xl text-[#FF0045]">+100</span>
                <p>Clientes</p>
            </div>
            <div class="flex flex-col items-center">
                <span class="font-bold text-4xl text-[#FF0045]">+30</span>
                <p class="font-bold">Millones</p>
                <p>de beneficiarios</p>
            </div>
        </div>
        <div class="flex flex-col my-4 py-32 w-full items-center text-center space-y-8 text-white bg-cover" style="background-image: url(storage/images/serv-prod-home1.png);">
            <div class="space-y-4">
                <h4>BENS ELECTRIC</h4>
                <p>Te brindamos los mejores servicios con la mejor calidad y un equipo de especialistas.</p>
            </div>
            <div class="flex w-72 justify-between">
                <button class="bg-[#FF0045] p-4 uppercase">Servicios</button>
                <button class="bg-[#FF0045] p-4 uppercase">Productos</button>
            </div>
        </div>
        <div id="clientes" class="w-full my-4">
            <h2 class="text-center my-8 font-bold text-4xl text-gray-400">Algunos de nuestros clientes</h2>
            <Splide
                :options="options2"
                aria-label="My Favorite Images"
            >
              <SplideSlide>
                <img class="" src="/storage/images/logo-wilson.png" alt="Wilsong">
              </SplideSlide>
              <SplideSlide>
                <img class="" src="/storage/images/logo-azor.png" alt="Azor">
              </SplideSlide>
              <SplideSlide>
                <img class="" src="/storage/images/logo-CIBanco.png" alt="CI Banco">
              </SplideSlide>
              <SplideSlide>
                <img class="" src="/storage/images/logo-OfficeMax.png" alt="Office Max">
              </SplideSlide>
              <SplideSlide>
                <img class="" src="/storage/images/logo-concord.png" alt="Concord">
              </SplideSlide>
              <SplideSlide>
                <img class="" src="/storage/images/logo-hidrosina.png" alt="Hidrosina">
              </SplideSlide>
              <SplideSlide>
                <img class="" src="/storage/images/logo-CFE.png" alt="CFE">
              </SplideSlide>
              <SplideSlide>
                <img class="" src="/storage/images/logo-infra.png" alt="Infra">
              </SplideSlide>
              <SplideSlide>
                <img class="" src="/storage/images/logo-plenia.png" alt="Plenia">
              </SplideSlide>
              <SplideSlide>
                <img class="" src="/storage/images/logo-ramsa.png" alt="Ramsa">
              </SplideSlide>
              <SplideSlide>
                <img class="" src="/storage/images/logo-solaer.png" alt="Solaer">
              </SplideSlide>
              <SplideSlide>
                <img class="" src="/storage/images/logo-unigas.png" alt="Unigas">
              </SplideSlide>
            </Splide>
        </div>
    </Layout>
</template>