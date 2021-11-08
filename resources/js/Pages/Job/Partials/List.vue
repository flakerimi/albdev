<template>
  <div class="md:grid md:grid-cols-3 md:gap-6 mt-10 sm:mt-0">
    <div class="md:col-span-1 flex justify-between">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium text-gray-900">Jobs Info</h3>
        <div v-for="data in jobs" @click="job = data" :key="data.id">
          <div>
            <h3 class="text-lg left font-medium text-gray-900">
              {{ data.title }}
            </h3>
            <button class="right">Apply</button>
          </div>

          <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p>{{ data.salary_from }} - {{ data.salary_to }}</p>
          </div>
        </div>
      </div>
      <div class="px-4 sm:px-0"></div>
    </div>

    <div class="mt-5 md:mt-0 md:col-span-2">
      <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
        <div class="mt-10 sm:mt-0">
          <div class="flex justify-between">
            <h1 class="text-2xl float-left font-bold text-gray-700">
              {{ job.title }}
            </h1>
            <button class="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Apply</button>
          </div>
          <div class="flex justify-between">
            <h1 class="text-lg float-left font-bold text-gray-700">${{ job.salary_from }} - ${{ job.salary_to }}</h1>
            <h1 class="text-lg float-left font-bold text-gray-700">{{ job.company.name }}</h1>
          </div>

          <p>{{ job.description }}</p>
          <h1 class="text-lg float-left font-bold text-gray-700">Posted by: {{ job.user.first_name }}{{ job.user.last_name }}</h1>
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
    jobs: Object,
  },

  data() {
    return {
      job: this.jobs[0],
    };
  },
  methods: {},
});
</script>
