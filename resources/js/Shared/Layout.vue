<template>
<Head>
<title>Welcome</title>
<meta type="description" content="This is my Inertia App" head_key="description" >

</Head>
    <div>
        <h1>MY INERTIA PRACTICE APP</h1>
        <h2>Welcome {{ username }}</h2>

        <Nav />
        <iframe  width="100%" frameborder="no" scrolling="no" seamless src="https://player.simplecast.com/fd0bd2ba-c553-466c-a060-b144797ce369?dark=false"></iframe>
        <slot />
    </div>
</template>

<script>
import Nav from "./Nav.vue";
export default {
    components: { Nav },

    computed: {
        username() {
            return this.$page.props.auth.username;
        },
    },
};
</script>
