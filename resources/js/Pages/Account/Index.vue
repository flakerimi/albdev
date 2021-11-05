<template>
  <app-layout title="Profile">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Account</h2>
    </template>
    <template #footer>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Account</h2>
    </template>
    <div class="max-w-7xl mx-auto mt-10">
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

      <hr class="mt-10 px-4 py-5 block" />
      <add-experience />

      <experience :edit="true" :experience_data="$page.props.experience_data" />
      <hr class="mt-10 px-4 py-5 block" />
      <add-education />

      <education :education_data="$page.props.education_data" />
      <hr class="mt-10 px-4 py-5 block" />
      <add-project />
      <project :project_data="$page.props.project_data" />
    </div>
  </app-layout>
</template>
<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import Experience from "./Partials/Experience.vue";
import Education from "./Partials/Education.vue";
import Project from "./Partials/Project.vue";
import AddProject from "./InLine/AddProject.vue";
import AddExperience from "./InLine/AddExperience.vue";
import AddEducation from "./InLine/AddEducation.vue";

export default defineComponent({
  components: {
    AppLayout,
    Education,
    Experience,
    Project,
    AddProject,
    AddExperience,
    AddEducation,
  },
  props: {
    edit: Boolean,
    account_data: Object,
    experience_data: Object,
    education_data: Object,
    project_data: Object,
  },
});
</script>
