<template>
  <div>
    <div id="project" class="md:grid md:grid-cols-3 md:gap-6 sm:mt-0">
      <div class="md:col-span-1 flex justify-between">
        <div class="px-4 sm:px-0"></div>
        <div class="px-4 sm:px-0"></div>
      </div>
      <div class="md:mt-0 md:col-span-2">
        <div class="sm:rounded-lg">
          <div class="mb-6 px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg" v-for="project in project_data" :key="project.id">
            <h3 class="text-lg font-medium text-gray-900">{{ project.title }} / {{ project.company }}</h3>
            <div class="mt-3 max-w-xl text-sm text-gray-600">
              <p>From: {{ project.start_month }} / {{ project.start_year }}</p>
              <p v-if="project.end_month || project.end_year">To: {{ project.end_month }} / {{ project.end_year }}</p>
            </div>
            <div class="mt-3 max-w-xl text-sm text-gray-600">
              <p>
                {{ project.description }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import AddProject from "@/Pages/Account/InLine/AddProject.vue";

export default defineComponent({
  components: {
    AppLayout,
    AddProject,
  },
  props: {
    project_data: Object,
  },

  data() {
    return {};
  },
  methods: {},
});
</script>
