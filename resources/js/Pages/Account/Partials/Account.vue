<template>
  <div class="md:grid md:grid-cols-3 md:gap-6 mt-10 sm:mt-0">
    <div class="md:col-span-1 flex justify-between">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium text-gray-900">Account Info</h3>
        <p class="mt-1 text-sm text-gray-600">Add additional security to your account using two factor authentication.</p>
      </div>
      <div class="px-4 sm:px-0"></div>
    </div>

    <div class="mt-5 md:mt-0 md:col-span-2">
      <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
        <div class="md:grid md:grid-cols-3 md:gap-6 mt-10 sm:mt-0">
          <div v-for="data in account_data" :key="data.id">
            <h3 class="text-lg font-medium text-gray-900">
              {{ data.key }}
            </h3>
            <div class="mt-3 max-w-xl text-sm text-gray-600">
              <p>
                {{ data.value }}
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
    account_data: Object,
  },

  data() {
    return {};
  },
  methods: {},
});
</script>
