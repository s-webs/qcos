<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import { Head } from "@inertiajs/vue3";
import {useI18n} from "vue-i18n";

const {t, locale} = useI18n();
</script>

<template>
    <Head title="Категории"/>
    <AdminLayout>
        <div class="flex flex-col h-full">
            <div>
                <div class="border-b-2 pb-4">
                    <span class="text-2xl">{{ t('main.creatingCategory') }}</span>
                </div>
                <form action="">
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <label class="block mb-2" for="grid-name-kz">
                            {{ t('main.categoryInKz') }}
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-name-kz" type="text" placeholder="KZ">
                        </label>
                        <label class="block mb-2" for="grid-name-ru">
                            {{ t('main.categoryInRu') }}
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-name-ru" type="text" placeholder="RU">
                        </label>
                    </div>
                    <button class="bg-green-500 py-2 px-4 rounded-lg hover:bg-green-600 text-white">{{ t('main.add') }}</button>
                </form>
            </div>
            <div class="border-b-2 pb-4 mt-8">
                <span class="text-2xl">{{ t('main.categoryList') }}</span>
            </div>
            <div class="flex-1 overflow-y-auto mt-4"> <!-- Используем flex-1 для заполнения свободного пространства -->
                <div v-for="n in 15" :key="n" class="flex flex-row justify-between items-center mt-4 border p-2 rounded-lg">
                    <div class="text-xl">Название категории {{ n }}</div>
                    <div class="flex flex-row gap-4">
                        <button class="bg-green-500 py-2 px-4 rounded-lg hover:bg-green-600 text-white">{{ t('main.edit') }}</button>
                        <button class="bg-red-500 py-2 px-4 rounded-lg hover:bg-red-600 text-white">{{ t('main.delete') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </AdminLayout>
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
