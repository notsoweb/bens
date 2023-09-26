<script setup>
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';

const props = defineProps({
    to: {
        default: '',
        type: String
    }
})

// const classes = computed(() => {
//     return `py-4 px-4 ${(route(route().current()) == props.href) ? 'bg-app-primary' : ''}`
// })

const classes = computed(() => {
    let show = false;

    if(route().current() != 'app.index' && props.to != 'app.index') {
        let current = route().current()
        let prefix = props.to
        let pattern = new RegExp('^' + prefix);
        
        show = pattern.test(current);
    } else {
        if(props.to == 'app.index' && route().current() == 'app.index') {
            show = true
        }
    }

    let status = show
        ? 'bg-app-primary'
        : ''

    return `py-4 px-4 ${status}`
});

</script>

<template>
    <li class="py-4">
        <Link 
            :href="route(to)"
            :class="classes"
        >
            <slot />
        </Link>
    </li>
</template>