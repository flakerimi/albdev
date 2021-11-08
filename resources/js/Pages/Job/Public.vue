<template>
  <app-layout title="Profile">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Jobs</h2>
      <filters :filters="filters"></filters>
    </template>
    <template #footer>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Footer</h2>
    </template>
    <div class="max-w-7xl mx-auto mt-10">
      <list :jobs="jobs"></list>
    </div>
  </app-layout>
</template>
<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import List from "./Partials/List.vue";
import Filters from "./Partials/Filters.vue";

export default defineComponent({
  components: {
    AppLayout,
    List,
    Filters,
  },
  props: {
    edit: false,
    jobs: Object,
    filters: Object,
  },
});
</script>
