<template>

    <div class="m-44">
        <div class="justify-start flex my-5">
            <h1 class="text-3xl">Login</h1>
        </div>
        <form
            @submit.prevent="submit"
            class="bg-white shadow-md border rounded px-8 pt-6 pb-8 mb-4"
        >

            <div class="mb-4">
                <label
                    class="block text-gray-700 text-sm font-bold mb-2"
                    for="password"
                >
                    Email
                </label>
                <input
                    v-model="form.email"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email"
                    type="text"
                    :class="{'border-red-500' : errors.email }"
                />
                <div class="text-red-500 text-xs mt-1">{{errors.email}}</div>
            </div>
            <div class="mb-6">
                <label
                    class="block text-gray-700 text-sm font-bold mb-2"
                    for="password"
                >
                    Password
                </label>
                <input
                    v-model="form.password"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="password"
                    type="password"
                    :class="{'border-red-500' : errors.password}"
                />
                <div class="text-red-500 text-xs mt-1">{{errors.password}}</div>
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit"
                >
                    Submit
                </button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    layout: null  ,
    data() {
        return { form: {} };
    },
    props: {

        errors: Object
    },

    watch: {
        form(value) { 
            console.log(value);
        },
    },
    methods: {
        submit() {
            this.$inertia.post("/login", this.form);
        },
    },
};
</script>
