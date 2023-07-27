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
    return `py-4 px-4 ${(route(route().current()) == props.href) ? 'bg-app-primary' : ''}`
})
</script>

<template>
    <li class="py-4">
        <Link 
            :href="href"
            :class="classes"
        >
            <slot />
        </Link>
    </li>
</template>