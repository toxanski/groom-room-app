<template>
  <Header></Header>
  <router-view></router-view>
  <Footer></Footer>
</template>

<script>
import Header from "./components/UI/Header";
import Footer from "./components/UI/Footer";

export default {
  components: {
    Header,
    Footer
  }
}
</script>

<style>
  *, *::before, * ::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  html, body {
    height: 100%;
  }

  :root {
    --very-peri: #7575FF;
    --primary-grey: #C7C7C7;
    --light-grey: #F2F2F2;
    --black-color: #000000;
    --primary-red: #E25151;
  }

  body {
    font-family: 'Roboto', sans-serif;
    font-weight: 700;
  }

  ::-webkit-input-placeholder {
    color: var(--primary-grey);
    font-family: 'Roboto', sans-serif;
  }

  ::-moz-placeholder {
    color: var(--primary-grey);
    font-family: 'Roboto', sans-serif;
  }

  :-ms-input-placeholder {
    color:var(--primary-grey);
    font-family: 'Roboto', sans-serif;
  }

  :-moz-placeholder {
    color:var(--primary-grey);
    font-family: 'Roboto', sans-serif;
  }

  .title {
    font-size: 32px;
  }

  #app {
    display: flex;
    flex-direction: column;
    height: 100%;
  }

  .main {
    flex: 1 0 auto;
  }

  .footer {
    flex: 0 0 auto;
  }

  .wrapper {
    max-width: 880px;
    width: 100%;
    margin: 0 auto;
    padding: 0 10px;
  }
  .subscription__title {
    font-weight: bold;
    margin-bottom: 16px;
    font-size: 18px;
    z-index: 1000;
  }

</style>