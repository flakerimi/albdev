<template>
  <div>
    <transition name="bounce">
      <div v-if="showChild" class="mt-5 mb-5 md:mt-0 md:col-span-2">
        <form @submit.prevent="$emit('submitted')">
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
              <textarea ref="description" id="description" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" rows="6" placeholder="Type description here.." v-model="form.description"></textarea>
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
  props: {
    experience_data: Object,
    showChild: {
      type: Boolean,
      default: true,
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
        title: this.experience_data.title,
        company: this.experience_data.company,
        start_month: this.experience_data.start_month,
        start_year: this.experience_data.start_year,
        end_month: this.experience_data.end_month,
        end_year: this.experience_data.end_year,
        description: this.experience_data.description,

        error: "",
      }),
    };
  },

  methods: {
    saveProject() {
      //console.log(this.form);
      this.form.post(route("experience.store"), {
        errorBag: "experienceStore",
        onSuccess: (e) => {
          this.visible = false;
          console.log(e);
        },
      });
    },
  },
});
</script>
<style scoped>
.bounce-enter-active {
  animation: bounce-in 0.56s;
}
.bounce-leave-active {
  animation: bounce-in 0.56s reverse;
}
@keyframes bounce-in {
  0% {
    transform: scale(0);
    opacity: 0;
  }
  70% {
    transform: scale(1.05);
    opacity: 0.5;
  }
  100% {
    transform: scale(1);
    opacity: 1;
  }
}
</style>
