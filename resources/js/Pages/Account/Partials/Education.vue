<template>
  <div id="education" class="md:grid md:grid-cols-3 md:gap-6 sm:mt-0">
    <div class="md:col-span-1 flex justify-between">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium text-gray-900">Education</h3>
        <p class="mt-1 text-sm text-gray-600">
          Add additional security to your account using two factor
          authentication.
        </p>
      </div>
      <div class="px-4 sm:px-0"></div>
    </div>
    <div class="md:mt-0 md:col-span-2">
      <div class="sm:rounded-lg">
        <div
          class="mb-6 px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg"
          v-for="education in education_data"
          :key="education.id"
        >
          <h3 class="text-lg font-medium text-gray-900">
            {{ education.school }} / {{ education.degree }}
          </h3>
          <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p>
              From: {{ education.start_month }} / {{ education.start_year }}
            </p>
            <p v-if="education.end_month || education.end_year">
              To: {{ education.end_month }} / {{ education.end_year }}
            </p>
          </div>
          <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p>
              {{ education.description }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";

export default defineComponent({
  components: {
    AppLayout,
  },
  props: {
    education_data: Object,
  },

  data() {
    return {};
  },
  methods: {},
});
</script>
