<template>
  <div class="dialog" v-if="show" @click.stop="hideDialog">
    <div @click.stop class="dialog__content">
      <slot></slot>
    </div>
  </div>
</template>

<script>
export default {
  name: 'modal-window',
  props: {
    show: {
      type: Boolean,
      default: false
    }
  },
  methods: {
    hideDialog() {
      this.$emit('update:show', false);
    }
  }
}
</script>

<style>
  .dialog {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    z-index: 2000;
  }

  .dialog__content {
    margin: auto;
    background: white;
    border-radius: 12px;
    min-height: 50px;
    min-width: 500px;
    padding: 25px;
  }

  .dialog__title {
    padding-bottom: 15px;
    margin-bottom: 15px;
    border-bottom: 2px solid var(--primary-grey);
  }

  .dialog__data {
    margin-left: 10px;
  }
</style>