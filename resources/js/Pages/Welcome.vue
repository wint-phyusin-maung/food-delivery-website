<template>
         hello{{ name }}
</template>

<script setup>
   defineProps({
      'name' : String,
   })
</script>