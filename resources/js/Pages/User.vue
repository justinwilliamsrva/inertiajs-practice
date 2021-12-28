<template>
    <Layout>

        <h1>Users</h1>
        <h2>The time is {{ time }}</h2>
        <Link preserve-scroll href="/user">Refresh</Link>
    </Layout>
</template>

<script>
import Layout from "../Shared/Layout.vue";


import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {  Link, Layout },
    props: {
        time: String,
    },
};
</script>
<style scoped>
h2 {
    margin-top: 100vh;
}
</style>
