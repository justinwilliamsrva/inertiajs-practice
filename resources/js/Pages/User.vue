<template>
    <div>
        <Nav/>
        <h1>Users</h1>
        <h2>The time is {{ time }}</h2>
        <Link preserve-scroll href="/user">Refresh</Link>





    </div>
</template>



<script>
import Nav from '../Shared/Nav.vue'
import {Link} from '@inertiajs/inertia-vue3'

export default {
components:{Nav,Link},
 props: {
        time: String,
    },
}
</script>
<style scoped>
h2{

    margin-top: 100vh
}
</style>