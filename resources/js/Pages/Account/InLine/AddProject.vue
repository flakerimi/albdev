<template>
  <span>
    <jet-button
      @click="visible = true"
      class="rounded-full text-xl w-full text-center bg-green-500"
      >+</jet-button
    >

    <div class="sm:rounded-lg">
      <div class="mb-6 px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
        <div class="mt-4">
          <jet-input
            type="text"
            class="mt-1 block w-1/2"
            placeholder="Title"
            ref="title"
            v-model="form.title"
          />

          <jet-input-error :message="form.error" class="mt-2" />
        </div>
        <div class="mt-4">
          <jet-input
            type="password"
            class="mt-1 left-0 block w-1/2"
            placeholder="Title"
            ref="password"
            v-model="form.password"
            @keyup.enter="confirmPassword"
          />

          <jet-input-error :message="form.error" class="mt-2" />
        </div>
        <div class="mt-4">
          <jet-input
            type="password"
            class="mt-1 block w-1/2"
            placeholder="Title"
            ref="password"
            v-model="form.password"
            @keyup.enter="confirmPassword"
          />

          <jet-input-error :message="form.error" class="mt-2" />
        </div>

        <div>
          <jet-secondary-button @click="closeModal">
            Cancel
          </jet-secondary-button>

          <jet-button
            class="ml-2"
            @click="confirmPassword"
            :class="{ 'opacity-25': form.processing }"
            :disabled="form.processing"
          >
            {{ button }}
          </jet-button>
        </div>
      </div>
    </div>
  </span>
</template>

<script>
import { defineComponent } from "vue";
import JetButton from "@/Jetstream/Button.vue";
import JetDialogModal from "@/Jetstream/DialogModal.vue";
import JetInput from "@/Jetstream/InlineInput.vue";
import JetInputError from "@/Jetstream/InputError.vue";
import JetSecondaryButton from "@/Jetstream/SecondaryButton.vue";

export default defineComponent({
  emits: ["confirmed"],

  props: {},

  components: {
    JetButton,
    JetDialogModal,
    JetInput,
    JetInputError,
    JetSecondaryButton,
  },

  data() {
    return {
      visible: true,
      form: {
        title: "",
        company: "",
        start_month: "",
        start_year: "",
        end_month: "",
        end_year: "",
        description: "",
        url: "",
        active: "",
        error: "",
      },
    };
  },

  methods: {
    confirmPassword() {
      this.form.processing = true;
    },

    closeModal() {
      this.visible = false;
      this.form.password = "";
      this.form.error = "";
    },
  },
});
</script>
