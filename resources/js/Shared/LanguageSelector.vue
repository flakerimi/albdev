<template>
  <div class="ml-4">
    <inertia-link :href="route('language', [selectable_locale])">
      <icon class="w-5 h-5" :name="selectable_locale" />
    </inertia-link>
  </div>
</template>

<script>
import Icon from "@/Shared/Icon";
import { InertiaLink } from "@inertiajs/inertia-vue3";

export default {
  components: {
    Icon,
    InertiaLink,
  },

  computed: {
    selectable_locale() {
      if (this.$page.props.locale == "de") {
        return "en";
      }
      return "de";
    },
  },
};
</script>
