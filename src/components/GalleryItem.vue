<template>
  <div class="gallery__item">
    <img src="../assets/img/image2.jpg" alt="" class="gallery__img">
    <h4 class="gallery__item-name">{{ card.title }}</h4>
  </div>
</template>

<script>
export default {
  props: {
    card: {
      type: Object,
      required: true
    }
  }
}
</script>

<style scoped>
  .gallery__item {
    padding: 8px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 14px;
  }

  .gallery__item-name {
    padding: 18px 15px;
  }
</style>