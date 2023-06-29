<script setup>
import { ref } from 'vue';
import VueMultiselect from 'vue-multiselect';

const emit = defineEmits(['update:modelValue']);

const props = defineProps({
    trackBy: {
        default: 'id',
        type: String
    },
    label: {
        default: 'name',
        type: String
    },
    modelValue: String | Number,
    mode: {
        default: 'single',
        type: String
    },
    title: String,
    options: Object,
    onError: String,
    placeholder: {
        default: 'Buscar ...',
        type: String
    },
    required: Boolean
});

const value = ref(props.modelValue);
const multiselect = ref();

defineExpose({
    clean: () =>  multiselect.value.removeLastElement()
});


const onChange = (value)  => {
    emit('update:modelValue', value);
}

const onRemove = ()  => {
    emit('update:modelValue', null);
}
</script>

<template>
    <div class="flex flex-col">
        <label v-if="title" class="block mb-2 text-sm font-medium text-gray-900">
            {{title}} <span class="text-red-500" v-if="required">*</span> <slot name="label-icon" />
        </label>
        <VueMultiselect 
            v-model="value"
            ref="multiselect"
            :options="options"
            :mode="mode"
            :close-on-select="true"
            :clear-on-select="false"
            :preserve-search="true"
            selectedLabel="Seleccionado"
            selectLabel="Seleccionar"
            deselectLabel="Remover"
            :placeholder="placeholder"
            :label="label"
            :track-by="trackBy"
            :required="required"
            @select="onChange"
            @remove="onRemove"
        >
            <template #noOptions>
                {{ $t('noRecords') }}
            </template>
        </VueMultiselect>
        <p v-show="onError" class="text-sm text-red-600">
            {{ onError }}
        </p>
    </div>
</template>