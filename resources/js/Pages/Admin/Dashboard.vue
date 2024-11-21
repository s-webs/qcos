<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import {Head, useForm} from "@inertiajs/vue3";
import {useI18n} from "vue-i18n";

const {t, locale} = useI18n();
</script>

<template>
    <Head title="Панель управления"/>
 <AdminLayout>
     <div class="border-b-2 pb-4">
         <span class="text-2xl">{{ t('main.inTheQueue') }}: 12</span>
     </div>
     <div class="flex flex-row gap-4 mt-8">
         <div class="basis-1/5">
             <div class="flex flex-col justify-center items-center bg-slate-200 border h-full rounded-lg text-center p-4">
                 <div>{{ t('main.currentTicket') }}</div>
                 <div class="text-4xl font-bold mt-8">24</div>
                 <div class="mt-8">
                     Заявка на поступление
                 </div>
             </div>
         </div>
         <div class="basis-4/5 grid grid-cols-5 gap-4 text-xl font-bold overflow-y-auto rounded-lg h-72">
             <!-- Пример элементов списка -->
             <div v-for="n in 12" :key="n" class="flex flex-col justify-center items-center p-4 rounded-lg border bg-gray-100 h-32">
                 <div class="flex flex-row gap-4 justify-center items-center content-center">
                     <span>{{ n }}</span>
                     <font-awesome-icon :icon="['fas', 'right-long']" />
                     <span>1</span>
                 </div>
                 <div class="text-lg text-center">
                     <span>Заявка на потупление</span>
                 </div>
             </div>
         </div>
     </div>
     <div class="flex justify-between mt-8">
         <div>
             <button class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg">{{ t('main.nextTicket') }}</button>
         </div>
         <div class="flex gap-4">
             <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">{{ t('main.clearQueue') }}</button>
             <button class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg">{{ t('main.closeQueue') }}</button>
         </div>
     </div>
     <div class="border-b-2 pb-4 mt-8 mb-4">
         <span class="text-2xl">{{ t('main.selectionTable') }}</span>
     </div>
     <div class="grid grid-cols-5 gap-4">
         <div v-for="n in 4" :key="n" class="p-4 box-border rounded-lg bg-gray-100 border">
             <div class="text-2xl text-center">
             <span>Стол №{{ n }}</span>
             </div>
             <div class="text-lg text-center box-border mt-8">
                 <button class="bg-green-600 hover:bg-green-700 px-4 py-2 box-border rounded-lg text-white">{{ t('main.selectTable') }}</button>
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
