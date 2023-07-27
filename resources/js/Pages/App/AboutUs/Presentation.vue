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
        
    </Layout>
</template>