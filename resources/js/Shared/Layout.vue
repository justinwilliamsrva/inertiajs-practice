<template>
    <div>
        <h1>MY INERTIA PRACTICE APP</h1>
        <h2>Welcome {{$page.props.auth.username}}</h2>

        <Nav />
        <slot />
    </div>
</template>

<script>
import Nav from "./Nav.vue";
export default {
    components: { Nav },
};
</script>
