<script setup>

</script>

<template>
    <div class="bg-gray-200 w-screen h-screen flex box-border">
        <div class="h-full w-72 box-border p-4">
            <div class="bg-gradient-to-t from-green-300 to-cyan-400 h-full w-full rounded-lg">
                <div class="text-center box-border py-4">
                    <span class="text-2xl text-white">QCOS</span>
                </div>
                <div class="px-4 flex flex-col gap-4">
                    <div class="p-2 rounded-lg text-white cursor-pointer bg-sky-500 hover:bg-sky-600 border">Главная</div>
                    <div class="p-2 rounded-lg text-white cursor-pointer hover:bg-sky-600 bg-sky-500">Категории</div>
                    <div class="p-2 rounded-lg text-white cursor-pointer hover:bg-sky-600 bg-sky-500">Столы</div>
                    <div class="p-2 rounded-lg text-white cursor-pointer hover:bg-sky-600 bg-sky-500">Мониторинг</div>
                </div>
            </div>
        </div>
        <div class="box-border p-4 w-full flex flex-col h-full">
            <div class="bg-white flex flex-row justify-between p-4 rounded-lg">
                <div class="flex flex-row gap-4">
                    <span>KZ</span>
                    <span>RU</span>
                    <span>EN</span>
                </div>
                <div>Выйти</div>
            </div>
            <div class="bg-white w-full flex-1 overflow-y-auto rounded-lg box-border p-4 mt-4">
                <slot />
            </div>
        </div>
    </div>
</template>

<style scoped>
/* Вы можете добавить кастомные стили для улучшения */
</style>
