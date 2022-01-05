<template>
    <div>
            <template v-for="link in links" :key="link.label">
                <Link
                    v-if="link.url"
                    :href="link.url"
                    class="px-1"
                    v-html="link.label"
                    :class="{'font-bold'  : link.active}"
                ></Link>
            </template>
        </div>
</template>

<script>
export default {
    props: {

        links: Array
    }
}
</script>