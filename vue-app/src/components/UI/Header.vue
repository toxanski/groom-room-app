<template>
  <header class="header">
    <div class="wrapper">
      <div class="header__content">
        <div class="header__logo" @click="$router.push('/')">
          <h1 class="header__title title">Grooming</h1>
          <span class="header__subtitle">Service for dogs and cats</span>
        </div>
        <nav class="header__nav nav">
          <div class="nav__item">
            <my-button class="nav__button" @click="$router.push('/')">
              <ion-icon name="home-outline" class="nav__item-ico"></ion-icon>
              Главная
            </my-button>
          </div>
          <div class="nav__item">
            <my-button class="nav__button" @click="$router.push('/auth')">
              <ion-icon name="key-outline" class="nav__item-ico"></ion-icon>
              Вход
            </my-button>
          </div>
        </nav>
      </div>
    </div>
  </header>
</template>

<script>
import MyButton from "./MyButton";
export default {
  components: {MyButton}
}
</script>

<style scoped>
  .header {
    padding: 30px 0;
    border-bottom: 1px solid lightgray;
    margin-bottom: 55px;
  }

  .header__content {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .header__logo {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    text-transform: uppercase;
    cursor: pointer;
  }

  .header__title.title{
    color: var(--very-peri);
    font-size: 36px;
  }

  .header__subtitle {
    font-size: 10px;
    color: darkgrey;
    margin-left: 2px;
  }

  .nav {
    display: flex;
    align-items: center;
  }
  .nav__item {
    margin-left: 20px;
  }

  .nav__button {
    transition: .2s ease-in-out;
    font-size: 12px;
    text-transform: uppercase;
    font-weight: bold;
    cursor: pointer;
    color: darkgrey;
  }

  .nav__item-ico {
    font-size: 16px;
    margin-right: 5px;
    vertical-align:text-bottom;
  }

  .nav__button:hover,
  .nav__button:focus {
    color: var(--very-peri);
  }
</style>