<script setup>
import {Head} from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { useI18n } from 'vue-i18n';
const { t, locale } = useI18n();
</script>

<template>
    <Head title="Электронная очередь"></Head>
    <GuestLayout>
        <div class="flex flex-row gap-4 h-full">
            <div class="basis-2/3 grid grid-cols-2 gap-4 rounded-lg h-full overflow-y-auto text-2xl">
                <div class="bg-white/60  h-48 p-4 rounded-lg content-center">Прием документов и зачисление в высшие
                    учебные заведения для обучения по образовательным программам высшего образования
                </div>
                <div class="bg-white/60 h-48 p-4 rounded-lg content-center">Прием документов и зачисление в высшие
                    учебные заведения для обучения по образовательным программам послевузовского образования
                </div>
                <div class="bg-white/60 h-48 p-4 rounded-lg content-center">Прием документов для участия в конкурсе на
                    обучение за рубежом в рамках академической мобильности
                </div>
                <div class="bg-white/60 h-48 p-4 rounded-lg content-center">Выдача сертификата о сдаче единого
                    национального тестирования
                </div>
                <div class="bg-white/60 h-48 p-4 rounded-lg content-center">Получение дубликатов документов о высшем и
                    послевузовском образовании
                </div>
                <div class="bg-white/60 h-48 p-4 rounded-lg content-center">Транскрипт для обучавшихся</div>
                <div class="bg-white/60 h-48 p-4 rounded-lg content-center">Транскрипт для обучавшихся</div>
                <div class="bg-white/60 h-48 p-4 rounded-lg content-center">Транскрипт для обучавшихся</div>
                <div class="bg-white/60 h-48 p-4 rounded-lg content-center">Транскрипт для обучавшихся</div>
            </div>
            <div class="basis-2/6 content-center bg-white/60 rounded-lg box-border p-4">
                <div class="flex justify-center">
                    <img class="h-64" src="/images/qr_test.png" alt="">
                </div>
                <div class="text-center box-border mt-8">
                    <span class="text-2xl font-bold">{{ t('main.welcomeScan') }}</span>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>

<style scoped>
::-webkit-scrollbar {
    width: 0px;
    background: transparent;
}

html {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
</style>
