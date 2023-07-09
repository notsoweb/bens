<script setup>
import { computed } from 'vue';

const props = defineProps({
    name:  String,
    title: String,
    type: {
        default: 'fab',
        type: String
    }
})

const classes = computed(() => {
    return `${props.type} fa-${props.name}`
});
</script>

<template>
    <button :title="title" type="button">
        <i :class="classes"></i>
    </button>
</template>