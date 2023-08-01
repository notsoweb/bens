<script setup>
defineProps({
    src: String,
    title: String
})
</script>

<template>
    <div class="shadow-2xl border rounded-xl">
        <img class="h-60 object-cover object-center" :src="src" />
        <div class="px-4 pt-4 pb-8">
            <h4 class="uppercase text-sm">{{ title }}</h4>
        </div>
    </div>
</template>