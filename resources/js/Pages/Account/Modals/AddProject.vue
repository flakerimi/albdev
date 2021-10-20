<template>
  <span>
    <jet-button @click="visible = true" class="rounded-full text-xl w-full text-center bg-green-500">+</jet-button>

    <jet-dialog-modal :show="visible" @close="closeModal">
      <template #title>
        {{ title }}
      </template>

      <template #content>
        {{ content }}

        <div class="mt-4">
          <jet-input type="password" class="mt-1 block w-3/4" placeholder="Password" ref="password" v-model="form.password" @keyup.enter="confirmPassword" />

          <jet-input-error :message="form.error" class="mt-2" />
        </div>
      </template>

      <template #footer>
        <jet-secondary-button @click="closeModal">Cancel</jet-secondary-button>

        <jet-button class="ml-2" @click="confirmPassword" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
          {{ button }}
        </jet-button>
      </template>
    </jet-dialog-modal>
  </span>
</template>

<script>
import { defineComponent } from "vue";
import JetButton from "@/Jetstream/Button.vue";
import JetDialogModal from "@/Jetstream/DialogModal.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetInputError from "@/Jetstream/InputError.vue";
import JetSecondaryButton from "@/Jetstream/SecondaryButton.vue";

export default defineComponent({
  emits: ["confirmed"],

  props: {
    title: {
      default: "Confirm Password",
    },
    content: {
      default: "For your security, please confirm your password to continue.",
    },
    button: {
      default: "Confirm",
    },
  },

  components: {
    JetButton,
    JetDialogModal,
    JetInput,
    JetInputError,
    JetSecondaryButton,
  },

  data() {
    return {
      visible: false,
      form: {
        password: "",
        error: "",
      },
    };
  },

  methods: {
    startConfirmingPassword() {},

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
