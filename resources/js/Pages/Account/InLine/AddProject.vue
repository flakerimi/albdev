<template>
  <div>
    <div id="project" class="md:grid md:grid-cols-3 md:gap-6 sm:mt-0">
      <div class="md:col-span-1 flex justify-between">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium text-gray-900">Projects</h3>
          <p class="mt-1 text-sm text-gray-600">Add additional security to your account using two factor authentication. {{ AddProject }}</p>
        </div>

        <div class="px-4 sm:px-0"></div>
      </div>
      <div class="md:mt-0 md:col-span-2">
        <div class="sm:rounded-lg">
          <jet-button @click="visible = !visible" class="rounded-full mb-5 text-xl w-full text-center focus:outline-blue focus:border-dotted focus:border-b focus-visible:border-gray-200 bg-green-500">+</jet-button>
          <transition name="bounce">
            <div class="mt-5 mb-5 md:mt-0 md:col-span-2" v-if="visible">
              <form @submit.prevent="$emit('submitted')">
                <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                  <div class="flex flex-wrap">
                    <div class="mt-4 w-1/2 px-2">
                      <jet-input type="text" class="mt-1 block w-full" placeholder="Title" ref="title" v-model="form.title" />

                      <jet-input-error :message="form.error" class="mt-2" />
                    </div>
                    <div class="mt-4 w-1/2 px-2">
                      <jet-input type="text" class="mt-1 block w-full" placeholder="Company" ref="company" v-model="form.company" />

                      <jet-input-error :message="form.error" class="mt-2" />
                    </div>
                    <div class="mt-4 w-1/4 px-2">
                      <select v-model="form.start_month" class="border-0 text-gray-500 border-dotted border-b border-gray-200 focus:outline-blue focus:border-dotted focus:border-b focus-visible:border-gray-200">
                        <option value="">Start Month</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                      </select>
                    </div>
                    <div class="mt-4 w-1/4 px-2">
                      <select v-model="form.start_year" class="border-0 text-gray-500 border-dotted border-b border-gray-200 focus:outline-blue focus:border-dotted focus:border-b focus-visible:border-gray-200">
                        <option value="">Start Year</option>

                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                      </select>
                    </div>
                    <div class="mt-4 w-1/4 px-2">
                      <select v-model="form.end_month" class="border-0 text-gray-500 border-dotted border-b border-gray-200 focus:outline-blue focus:border-dotted focus:border-b focus-visible:border-gray-200">
                        <option value="">End Month</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                      </select>
                    </div>
                    <div class="mt-4 w-1/4 px-2">
                      <select v-model="form.end_year" class="border-0 text-gray-500 border-dotted border-b border-gray-200 focus:outline-blue focus:border-dotted focus:border-b focus-visible:border-gray-200">
                        <option value="">End Year</option>

                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                      </select>
                      <jet-input-error :message="form.error" class="mt-2" />
                    </div>
                    <div class="mt-4 w-full px-2">
                      <jet-label for="description" value="Description" />
                      <textarea ref="description" id="description" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" rows="6" placeholder="Type description here.." v-model="form.description"></textarea>
                    </div>
                    <div class="mt-4 w-1/2 px-2">
                      <jet-input type="text" class="mt-1 block w-full" placeholder="Url" ref="url" v-model="form.url" />

                      <jet-input-error :message="form.error" class="mt-2" />
                    </div>
                    <div class="mt-4 w-1/2 px-2">
                      <label class="flex items-center">
                        <jet-checkbox :value="active" v-model:checked="form.active" />
                        <span class="ml-2 text-sm text-gray-600">Currently Working?</span>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                  <jet-secondary-button @click="visible = false">Cancel</jet-secondary-button>
                  <jet-button class="ml-2" @click="saveProject" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Save</jet-button>
                </div>
              </form>
            </div>
          </transition>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { defineComponent } from "vue";
import JetButton from "@/Jetstream/Button.vue";
import JetTextarea from "@/Jetstream/Textarea.vue";
import JetCheckbox from "@/Jetstream/Checkbox.vue";
import JetDialogModal from "@/Jetstream/DialogModal.vue";
import JetInput from "@/Jetstream/InlineInput.vue";
import JetInputError from "@/Jetstream/InputError.vue";
import JetSecondaryButton from "@/Jetstream/SecondaryButton.vue";

export default defineComponent({
  emits: ["confirmed"],

  props: {
    onSubmitted() {
      console.log("cyv");
    },
  },

  components: {
    JetButton,
    JetTextarea,
    JetCheckbox,
    JetDialogModal,
    JetInput,
    JetInputError,
    JetSecondaryButton,
  },

  data() {
    return {
      visible: false,
      form: this.$inertia.form({
        _method: "POST",
        title: this.title,
        company: this.company,
        start_month: this.start_month,
        start_year: this.start_year,
        end_month: this.end_month,
        end_year: this.end_year,
        description: this.description,
        url: this.url,
        active: this.active_project,
        error: "",
      }),
    };
  },

  methods: {
    saveProject() {
      //console.log(this.form);
      this.form.post(route("project.store"), {
        errorBag: "projectStore",
        onSuccess: (e) => {
          console.log(e);
        },
      });
    },

    onSubmitted() {
      console.log("cyv");
    },
  },
});
</script>
<style scoped>
.bounce-enter-active {
  animation: bounce-in 0.5s;
}
.bounce-leave-active {
  animation: bounce-in 0.5s reverse;
}
@keyframes bounce-in {
  0% {
    transform: scale(0);
  }
  50% {
    transform: scale(1.25);
  }
  100% {
    transform: scale(1);
  }
}
</style>
