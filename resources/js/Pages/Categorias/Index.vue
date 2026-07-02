<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head, router} from '@inertiajs/vue3'

defineProps({
    categorias: Array,
});

const headers = [
    {title: "id", key: 'id'},
    {title: 'Nombre', key: 'nombre'},
    {title: "Descripcion", key: 'descripcion'},
]

const exportar = () => {
    window.location.href = route('categorias.export')
}

</script>

<template>
<AuthenticatedLayout>

    <v-data-table :headers="headers" :items="categorias" item-value="id">

    </v-data-table>
    <v-btn
     @click="exportar()"
    >
    </v-btn>

</AuthenticatedLayout>
</template>

<style scoped>

</style>
