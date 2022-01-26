<template>
  <main class="main">
    <div class="wrapper">
      <div class="subscription">
        <p class="subscription__text">
          Профессиональная укладка <br/> для ваших домашних <br/> питомцев
        </p>

        <subscription-form/>
      </div>

      <gallery :galleryCards="galleryCards"/>
    </div>
  </main>
</template>

<script>
import SubscriptionForm from "../components/SubscriptionForm";
import Gallery from "../components/Gallery";
export default {
  components: {Gallery, SubscriptionForm },
  data() {
    return {
      galleryCards: [
        { id: Date.now(), title: 'Dog#1', body: '' },
        { id: Date.now(), title: 'Dog#1', body: '' },
        { id: Date.now(), title: 'Dog#1', body: '' },
        { id: Date.now(), title: 'Dog#1', body: '' },
        { id: Date.now(), title: 'Dog#1', body: '' },
      ],
    }
  }
}
</script>

<style scoped>
  .subscription {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .subscription__form {
    display: flex;
    flex-direction: column;
    min-width: 315px;
    padding: 30px;
    border: 1px solid var(--light-grey);
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    position: relative;
  }

  .subscription__title {
    font-weight: bold;
    margin-bottom: 16px;
    font-size: 18px;
    z-index: 1000;
  }

  .subscription__input {
    padding: 14px 20px;
    margin-bottom: 16px;
    border-radius: 10px;
    border: none;
    background-color: var(--light-grey);
  }

  .subscription__text {
    font-weight: bold;
    font-size: 32px;
    line-height: 37px;
  }

  .subscription__button {
    padding: 14px 0;
    border-radius: 10px;
    background-color: var(--very-peri);
    color: #fff;
    border: none;
    font-size: 14px;
  }

  .subscription__element {
    min-height: 48px;
  }

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
  }

  .gallery__item {
    padding: 8px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 14px;
  }

  .gallery__item-name {
    padding: 18px 15px;
  }

  .gallery__title {
    text-align: center;
  }
</style>