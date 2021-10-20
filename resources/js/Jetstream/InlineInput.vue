<template>
	<input
		class="
      border-0 border-dotted border-b border-gray-200
      focus:outline-blue
      focus:border-dotted focus:border-b
      focus-visible:border-gray-200
    "
		:value="modelValue"
		@input="$emit('update:modelValue', $event.target.value)"
		ref="input"
	/>
</template>

<script>
import { defineComponent } from "vue";

export default defineComponent({
	props: ["modelValue"],

	emits: ["update:modelValue"],

	methods: {
		focus() {
			this.$refs.input.focus();
		},
	},
});
</script>
