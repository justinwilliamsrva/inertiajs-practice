<template>
<Head>
<title>Users</title>
<meta type="description" content="Users information" head_key="description" >

</Head>
    <div>

        <h1>Users</h1>
        <ul>
            <li v-for="user of users" :key="user.id" v-text="user.name"></li>
        </ul>

    </div>
</template>

<script>





export default {

    props: {
        users: Array,
    },
};
</script>
<style scoped>
h2 {
    margin-top: 100vh;
}
</style>
