<template>
  <div class="max-w-7xl mx-auto mt-10">
    <div id="experience" class="md:grid md:grid-cols-3 md:gap-6 sm:mt-0">
      <div class="md:col-span-1 flex justify-between">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium text-gray-900">Experience</h3>
          <p class="mt-1 text-sm text-gray-600">Add additional security to your account using two factor authentication.</p>
        </div>
        <div class="px-4 sm:px-0"></div>
      </div>
      <div class="md:mt-0 md:col-span-2">
        <div class="sm:rounded-lg">
          <div class="mb-6 px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg" v-for="experience in experience_data" :key="experience.id">
            <a class="float-right" @click="toggleEdit(this, experience)">
              <svg v-if="!experience.edit" xmlns="http://www.w3.org/2000/svg" width="24px" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="{2}" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
              </svg>
              <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </a>

            <div v-show="!experience.edit">
              <h3 class="text-lg float-left font-medium text-gray-900">{{ experience.title }} / {{ experience.company }}</h3>
              <div class="float-right"></div>
              <div class="mt-3 clear-both max-w-xl text-sm text-gray-600">
                <p>
                  From: {{ experience.start_month }} /
                  {{ experience.start_year }}
                </p>
                <p v-if="experience.end_month || experience.end_year">
                  To: {{ experience.end_month }} /
                  {{ experience.end_year }}
                </p>
              </div>
              <div class="mt-3 max-w-xl text-sm text-gray-600">
                <p>
                  {{ experience.description }}
                  {{ experience.edit }}
                </p>
              </div>
            </div>
            <edit-experience :showChild="showChild" v-show="experience.edit" :experience_data="experience" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import EditExperience from "../InLine/EditExperience.vue";
import JetButton from "@/Jetstream/Button.vue";

export default defineComponent({
  components: {
    AppLayout,
    EditExperience,
    JetButton,
  },
  props: {
    experience_data: Object,
  },

  data() {
    return { showChild: false };
  },
  methods: {
    toggleEdit: function (ev, experience) {
      if (experience.edit == true) {
        setTimeout(() => (experience.edit = false), 500);
        this.showChild = !this.showChild;
      } else {
        setTimeout(() => (experience.edit = true), 0);
        this.showChild = !this.showChild;
      }
    },
  },
});
</script>
