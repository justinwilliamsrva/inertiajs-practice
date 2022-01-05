<template>
    <Head>
        <title>Users</title>
        <meta
            type="description"
            content="Users information"
            head_key="description"
        />a
    </Head>
    <div>
        <div class="justify-between flex my-5">
            <h1 class="font-large">Users</h1>
            <input
                class="border-2 rounded-lg"
                v-model="search"
                placeholder="Search"
            />
        </div>

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div
                    class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8"
                >
                    <div
                        class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
                    >
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                    >
                                        Name
                                    </th>

                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="user in users.data" :key="user.id">
                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div>
                                                <div
                                                    class="text-sm font-medium text-gray-900"
                                                >
                                                    {{ user.name }}
                                                </div>
                                                <div
                                                    class="text-sm text-gray-500"
                                                >
                                                    {{ user.email }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium"
                                    >
                                        <Link
                                            href="#"
                                            class="text-indigo-600 hover:text-indigo-900"
                                            >Edit</Link
                                        >
                                    </td>
                                </tr>

                                <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <Pagination :links="users.links" class="mt-6" />
    </div>
</template>
<script>
import Pagination from "../Shared/Pagination.vue";
export default {
    components: { Pagination },
    props: {
        users: Object,
        filters: Object
    },
    data() {return {search: this.filters.search}},
    watch:{
        search(value){
this.$inertia.get("/user",{search: value},{preserveState:true}
)

        }
    }
};
</script>
<style scoped>
h2 {
    margin-top: 100vh;
}
</style>
