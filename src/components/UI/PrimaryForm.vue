<template>
  <form action="/" class="primary__form" @submit.prevent>
    <slot></slot>
  </form>
</template>

<script>
export default {
  name: 'primary-form'
}
</script>

<style scoped>
  .primary__form {
    display: flex;
    flex-direction: column;
    min-width: 315px;
    padding: 30px;
    border: 1px solid var(--light-grey);
    border-radius: 10px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    position: relative;
  }
</style>