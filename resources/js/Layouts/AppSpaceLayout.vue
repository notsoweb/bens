<script setup>
import { Head } from '@inertiajs/vue3';

import Header from './Public/Header.vue'
import Footer from './Public/Footer.vue'

defineProps({
    title: String,
    titlePage: {
        default: true,
        type: Boolean
    }
});
</script>

<template>
    <Head
        :title="title"
    />
    <div class="flex flex-col h-screen justify-between">
        <div class="flex flex-col">
            <Header />
            <main class="bg-white flex flex-col cx-auto p-2 my-16 items-center">
                <slot />
            </main>
        </div>
        <Footer />
    </div>
</template>

<style>
@import '@splidejs/vue-splide/css';
</style>