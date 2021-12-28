<template>
    <nav>
        <ul>
            <li class=""><Link href="/">Home</Link></li>
            <li class=""><Link href="/user">Users</Link></li>
            <li class=""><Link href="/settings">Settings</Link></li>
        </ul>
    </nav>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {

    components: {
        Link,
    },
};
</script>
