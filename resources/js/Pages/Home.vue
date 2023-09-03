<template>
        <h1 class="text-4xl">Home</h1>
        <button @click="count++">Add 1</button>
        <p>Count is: {{ count }}</p>
</template>

<script setup>
import { ref } from 'vue'
const count = ref(0)
</script>
