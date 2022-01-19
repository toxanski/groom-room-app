<template>
  <input
      :value="modelValue"
      @input="updateInput"
      type="text"
      class="input"
      placeholder="Текстовое поле"
  />
</template>

<script>
export default {
  name: 'my-input',
  props: {
    modelValue: [String, Number]
  },
  methods: {
    updateInput(event) {
      this.$emit('update:modelValue', event.target.value);
    }
  }
}
</script>

<style scoped>
  .input {
    padding: 14px 20px;
    margin-bottom: 16px;
    border-radius: 10px;
    border: none;
    background-color: var(--light-grey);
  }
</style>