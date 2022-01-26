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
        @click="fetchRegister"
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
    },
    validate() {

    },
    async fetchRegister() {
      const data = JSON.stringify({
        username: this.user.email,
        password: this.user.pass
      });

      const myHeaders = new Headers();
      myHeaders.append('Access-Control-Allow-Origin', '*');
      // myHeaders.append('Authorization', `Basic ${this.user.email}`)
      const request = await  fetch('http://groom-room/yii-app/web/user/signup', {
        method: 'POST',
        mode: 'no-cors',
        credentials: 'include',
        headers: {
          'Access-Control-Allow-Origin': '*',
        },
        referrerPolicy: 'no-referrer',
        body: data,

      });
      console.log(request);
      // await this.createUser();
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
    background-image: url('../assets/img/image1.png');
    width: 300px;
    height: 164px;
  }
</style>