<template>
  <div class="gallery">
    <h2 class="gallery__title title">Наши работы</h2>
    <div class="gallery__content">
      <gallery-item
          v-for="card in galleryCards"
          :card="card"
          :key="card.id"
      />
    </div>
  </div>
</template>

<script>
import GalleryItem from "./GalleryItem";
export default {
  components: {GalleryItem},
  props: {
    galleryCards: {
      type: Array,
      required: true
    }
  }
}
</script>

<style scoped>
  .gallery {
    margin-bottom: 55px;
  }

  .gallery__title {
    margin-bottom: 10px;
  }

  .gallery__content {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    justify-items: center;
    row-gap: 20px;
  }
  .gallery__title {
    text-align: center;
  }
</style>