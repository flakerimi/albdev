<template>
  <div class="md:grid md:grid-cols-6 md:gap-6 mt-10 sm:mt-0">
    <div class="mt-5 md:mt-0" v-for="(value, key) in filters" :key="value">
      <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
        <jet-dropdown-alt align="left" width="64">
          <template #trigger>
            <button class="flex text-xl border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">Job {{ key }}</button>
          </template>
          <template #content>
            <div class="block px-4 py-2 text-xs text-gray-400">Job {{ key }}</div>
            <ul class="p-5">
              <li class="appearance-none checked:bg-blue-600 checked:border-transparent" v-for="role in value" :key="role">
                <input name="job-type-filter-value" :id="role.value" class="mr-3" type="checkbox" :value="role.value" />
                <label :for="role.value" class="search-reusables__value-label">{{ role.label }}</label>
              </li>
            </ul>
            <div class="border-t border-gray-100"></div>
          </template>
        </jet-dropdown-alt>
      </div>
    </div>
  </div>
</template>
<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import JetDropdownAlt from "@/Jetstream/DropdownAlt.vue";

export default defineComponent({
  components: {
    AppLayout,
    JetDropdownAlt,
  },
  props: {
    jobs: Object,
    filters: Object,
  },

  data() {
    return {
      roles: ["Backend Developer", "Data Scientist", "Database Administrator", "DevOps", "Desktop Developer", "TEAM LEAD", "QA LEAD", "QA ENGINEER", "TESTER", "UI DESIGNER", "UX DESIGNER"],
      experience_level: ["Internship"],
    };
  },
  methods: {},
});
</script>
