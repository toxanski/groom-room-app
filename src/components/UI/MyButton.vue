<template>
  <button class="button">
    <slot></slot>
  </button>
</template>

<script>
export default {
  name: 'my-button'
}
</script>

<style scoped>
  .button {
    background-color: transparent;
    border: 0;
    cursor: pointer;
  }
</style>