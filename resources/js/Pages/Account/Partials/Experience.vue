<template>
  <div class="max-w-7xl mx-auto mt-10">
    <div id="experience" class="md:grid md:grid-cols-3 md:gap-6 sm:mt-0">
      <div class="md:col-span-1 flex justify-between">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium text-gray-900">Experience</h3>
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
            v-for="experience in experience_data"
            :key="experience.id"
          >
            <h3 class="text-lg font-medium text-gray-900">
              {{ experience.title }} / {{ experience.company }}
            </h3>
            <div class="mt-3 max-w-xl text-sm text-gray-600">
              <p>
                From: {{ experience.start_month }} /
                {{ experience.start_year }}
              </p>
              <p v-if="experience.end_month || experience.end_year">
                To: {{ experience.end_month }} / {{ experience.end_year }}
              </p>
            </div>
            <div class="mt-3 max-w-xl text-sm text-gray-600">
              <p>
                {{ experience.description }}
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

export default defineComponent({
  components: {
    AppLayout,
  },
  props: {
    experience_data: Object,
  },

  data() {
    return {};
  },
  methods: {},
});
</script>
