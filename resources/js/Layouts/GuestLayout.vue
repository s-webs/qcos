<script setup>

</script>

<template>
    <div class="bg-gradient-to-r from-green-300 to-cyan-400 h-screen box-border p-4 flex flex-col">
        <div class="flex flex-row justify-between items-center">
            <div class="">
                <img src="/images/logo.webp" alt="Logo" style="width: 80px;">
            </div>
            <div class="flex flex-row gap-4 text-2xl">
                <span class="p-4 box-border bg-white rounded-lg">KZ</span>
                <span class="p-4 box-border bg-white rounded-lg">RU</span>
                <span class="p-4 box-border bg-white rounded-lg">EN</span>
            </div>
        </div>
        <div class="mt-4 flex-grow p-4 overflow-hidden">
            <slot/>
        </div>
    </div>
</template>

<style scoped>

</style>
