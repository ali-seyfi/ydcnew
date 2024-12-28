<script setup>
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>

    <Head title="Welcome" />

    <div class="p-8">
        <h1 class="font-bold text-3xl text-center">This is just a test title!</h1>
        <h2 class="font-bold text-2xl text-center"> Just added a secondary title for some tests </h2>
        <hr class="my-4">
        <section class="flex justify-around">
            <div>
                <span> User Can Login? </span>
                <b> {{ canLogin ? "Yes" : "No" }} </b>
            </div>
            <div>
                <span> User Can Register? </span>
                <b> {{ canRegister ? "Yes" : "No" }} </b>
            </div>
            <div>
                <span> PHP Version: </span>
                <b> {{ phpVersion }} </b>
            </div>
            <div>
                <span> Laravel Version: </span>
                <b> {{ laravelVersion }} </b>
            </div>
        </section>
    </div>

</template>
