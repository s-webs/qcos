<script setup>

</script>

<template>
    <div class="bg-gray-200 w-screen h-screen flex flex-row items-center box-border">
        <div class="h-full w-72 box-border p-4">
            <div class="bg-slate-600 h-full w-full rounded-lg">
                <div class="text-center box-border py-4">
                    <span class="text-2xl text-white">QCOS</span>
                </div>
                <div class="px-4 flex flex-col gap-4">
                    <div class="p-2 rounded-lg text-white cursor-pointer bg-slate-500 hover:bg-slate-400 border">Панель управления</div>
                    <div class="p-2 rounded-lg text-white cursor-pointer hover:bg-slate-400 bg-slate-500">Категории</div>
                    <div class="p-2 rounded-lg text-white cursor-pointer hover:bg-slate-400 bg-slate-500">Столы</div>
                    <div class="p-2 rounded-lg text-white cursor-pointer hover:bg-slate-400 bg-slate-500">Мониторинг</div>
                </div>
            </div>
        </div>
        <div class="box-border p-4 w-full flex flex-col h-full">
            <div class="bg-slate-600 flex flex-row justify-between p-4 rounded-lg">
                <div class="flex flex-row gap-4">
                    <button class="bg-slate-500 hover:bg-slate-400 text-center content-center w-8 h-8 rounded-sm text-white">KZ</button>
                    <button class="bg-slate-500 hover:bg-slate-400 text-center content-center w-8 h-8 rounded-sm text-white">RU</button>
                </div>
                <button class="bg-slate-500 hover:bg-slate-400 text-center content-center px-4 h-8 rounded-sm text-white">Выйти</button>
            </div>
            <div class="bg-white w-full flex-1 overflow-y-auto rounded-lg box-border p-4 mt-4">
                <slot />
            </div>
        </div>
    </div>
</template>

<style scoped>
::-webkit-scrollbar { /* chrome based */
    width: 0px; /* ширина scrollbar'a */
    background: transparent; /* опционально */
}

html {
    -ms-overflow-style: none; /* IE 10+ */
    scrollbar-width: none; /* Firefox */
}
</style>
