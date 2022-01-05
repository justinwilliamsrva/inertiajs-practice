<template>
<Head>
<title>Welcome</title>
<meta type="description" content="This is my Inertia App" head_key="description" >

</Head>
    <div >

        <Nav />
        <iframe  width="100%" frameborder="no" scrolling="no" seamless src="https://player.simplecast.com/fd0bd2ba-c553-466c-a060-b144797ce369?dark=false"></iframe>
        <div class="m-7">
            <slot />
        </div>
    </div>
</template>

<script>
import Nav from "./Nav.vue";
export default {
    components: { Nav },


};
</script>
