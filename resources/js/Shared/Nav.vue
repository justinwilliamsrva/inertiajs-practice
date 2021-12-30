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
                    href="/user"
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
            <li>
                <Link
                    :class="{ active: $page.component === 'Settings' }"
                    class="links"
                    href="/datatable"
                    >Datatables</Link
                >
            </li>
        </ul>
    </nav>
</template>

<script>

export default {

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
