<template>
    <my-button class="primary-button">
      <slot></slot>
    </my-button>
</template>

<script>

export default {
  name: 'primary-button'
}
</script>

<style scoped>
  .primary-button {
    padding: 14px 0;
    border-radius: 10px;
    background-color: var(--very-peri);
    color: #fff;
    border: none;
    font-size: 14px;
  }
</style>