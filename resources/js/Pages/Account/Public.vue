<template>
  <app-layout title="Profile">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Account</h2>
    </template>
    <template #footer>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Account</h2>
    </template>
    <div class="max-w-7xl mx-auto mt-10">
      <div class="bg-white my-12 pb-6 w-full justify-center items-center overflow-hidden rounded-lg shadow-sm mx-auto">
        <div class="relative h-40">
          <img class="absolute h-full w-full object-cover" :src="user_data.profile_photo_path" />
        </div>
        <div class="relative shadow mx-auto h-24 w-24 -my-12 border-white rounded-full overflow-hidden border-4">
          <img class="object-cover w-full h-full" :src="user_data.profile_photo_path" />
        </div>
        <div class="mt-16">
          <h1 class="text-lg text-center font-semibold">{{ user_data.first_name }} {{ user_data.last_name }}</h1>
          <p class="text-sm text-gray-600 text-center">
            <small>({{ user_data.user_type }})</small>
          </p>
          <p class="text-sm text-gray-600 text-center">{{ user_data.email }}</p>
          <p class="text-sm text-gray-600 text-center">13 connections in common</p>
        </div>
        <div class="mt-6 pt-3 flex flex-wrap justify-center mx-6 border-t">
          <div class="text-xs mr-2 my-1 uppercase rounded-sm bg-gray-500 text-white tracking-wider border px-2 border-indigo-600 hover:bg-indigo-600 hover:text-indigo-100 cursor-default">User experience</div>
          <div class="text-xs mr-2 my-1 uppercase rounded-sm bg-gray-500 text-white tracking-wider border px-2 border-indigo-600 hover:bg-indigo-600 hover:text-indigo-100 cursor-default">VueJS</div>
          <div class="text-xs mr-2 my-1 uppercase rounded-sm bg-gray-500 text-white tracking-wider border px-2 border-indigo-600 hover:bg-indigo-600 hover:text-indigo-100 cursor-default">TailwindCSS</div>
          <div class="text-xs mr-2 my-1 uppercase rounded-sm bg-gray-500 text-white tracking-wider border px-2 border-indigo-600 hover:bg-indigo-600 hover:text-indigo-100 cursor-default">React</div>
          <div class="text-xs mr-2 my-1 uppercase rounded-sm bg-gray-500 text-white tracking-wider border px-2 border-indigo-600 hover:bg-indigo-600 hover:text-indigo-100 cursor-default">Painting</div>
        </div>
      </div>
      <hr class="mt-10 px-4 py-5 block" />
      <account :account_data="$page.props.account_data" />
      <hr class="mt-10 px-4 py-5 block" />
      <experience :edit="false" :experience_data="$page.props.experience_data" />
      <hr class="mt-10 px-4 py-5 block" />
      <education :education_data="$page.props.education_data" />
      <hr class="mt-10 px-4 py-5 block" />
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
import Account from "./Partials/Account.vue";

export default defineComponent({
  components: {
    AppLayout,
    Account,
    Education,
    Experience,
    Project,
  },
  props: {
    edit: false,
    user_data: Object,
    account_data: Object,
    experience_data: Object,
    education_data: Object,
    project_data: Object,
  },
});
</script>
