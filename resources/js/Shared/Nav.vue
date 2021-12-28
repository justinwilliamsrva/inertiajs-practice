<template>
    <nav>
        <ul>
            <li>
                <Link
                    :class="{ active: $page.component === 'Home' }"
                    class="links"
                    href="/"
                    >Home</Link
                >
            </li>
            <li>
                <Link
                    :class="{ active: $page.component === 'User' }"
                    class="links"
                    href="/user?foo=bar"
                    >Users</Link
                >
            </li>
            <li>
                <Link
                    :class="{ active: $page.component === 'Settings' }"
                    class="links"
                    href="/settings"
                    >Settings</Link
                >
            </li>
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
<style scoped>
a {
    color: blue;
    text-decoration: none;
}
a:hover {
    text-decoration: underline;
}
.active {
    font-weight: 900;
    text-decoration: underline;
}
</style>
