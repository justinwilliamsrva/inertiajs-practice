<template>
    <div>

        <h1>Users</h1>
        <h2>The time is {{ time }}</h2>
        <Link preserve-scroll href="/user">Refresh</Link>
    </div>
</template>

<script>





export default {

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
