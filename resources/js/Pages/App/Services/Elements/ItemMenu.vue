<script setup>
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';

const props = defineProps({
    href: {
        default: '',
        type: String
    }
})

const classes = computed(() => {
    return (route().current() == props.href) ? 'text-app-primary font-semibold' : ''
})
</script>

<template>
    <li :class="classes">
        <Link :href="route(href)">
            <slot />
        </Link>
    </li>
</template>
