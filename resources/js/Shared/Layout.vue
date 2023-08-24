<template>
    <section class="bg-gray-200 p-6">
        <header class="flex justify-between">
            <h1 class="text-1xl font-bold">My App</h1>
            <h3>Welcome back, {{username}}</h3>
            <Nav></Nav>
        </header>
    </section>
    
    <section class="max-w-3xl mx-auto">
        <slot></slot>
    </section>
</template>

<script>
    import Nav from  '../Shared/Nav.vue';
    export default{
        components: {
          Nav
        },
        computed: {
            username(){
                return this.$page.props.auth.user.username;
            }
        }
    }
</script>