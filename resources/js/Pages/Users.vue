<template>
    Users
    <Nav></Nav>
   <div style="margin-top:600px">
        <h3>The current time is {{ time }}.</h3>
        <Link href="/users" class="text-blue-500" preserve-scroll>Refresh</Link>
   </div>
</template>

<script>
    import Nav from '../Shared/Nav.vue';
    import { Link } from '@inertiajs/vue3';

    export default{
        components: {
            Link,Nav
        },
        props : {
            time: String
        }
    }
</script>

