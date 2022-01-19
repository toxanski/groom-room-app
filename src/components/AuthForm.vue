<template>
  <primary-form>
    <div class="subscription__img"></div>
    <div class="subscription__title">
      <my-button
          class="subscription__switch button"
          @click="authMethod = 'login'"
          :class="{ subscription__switch_active: authMethod === 'login' }"
      >
        Вход
      </my-button>
      <my-button
          @click="authMethod = 'register'"
          :class="{ subscription__switch_active: authMethod === 'register' }"
          class="subscription__switch button"
      >
        Регистрация
      </my-button>
    </div>
    <my-input
        v-model="user.email"
        class="subscription__element"
        placeholder="Логин"
    />
    <my-input
        type="password"
        v-model="user.pass"
        class="subscription__element"
        placeholder="Пароль"
    />
    <primary-button
        @click="createUser"
        class="subscription__element"
    >
      Авторизоваться
    </primary-button>
  </primary-form>
</template>

<script>
export default {
  data() {
    return {
      authMethod: 'login'
    }
  },
  props: {
    user: {
      type: Object,
      required: true
    },
  },
  methods: {
    createUser() {
      this.$emit('create', this.user, this.authMethod);
    }
  }

}
</script>

<style scoped>
  .subscription__switch {
    color: var(--primary-grey);
    font-size: 18px;
    cursor: pointer;
    margin-right: 12px;
  }

  .subscription__switch_active {
    color: var(--black-color);
    font-weight: bold;
  }
  .subscription__img {
    position: absolute;
    left: 0;
    top: -115px;
    background-image: url('../../src/assets/img/image1.png');
    width: 300px;
    height: 164px;
  }
</style>