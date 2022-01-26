<template>
  <main class="main">
    <div class="wrapper">
      <div class="subscription subscription-auth">
        <div class="subscription__text">
          <h1 class="subscription-auth__title">Войдите или зарегистрируйтесь</h1>
          <span class="subscription-auth__text">
            Чтобы получить возможность
            добавить заявку
          </span>
        </div>
        <modal-window v-model:show="dialogVisible">
          <h1 class="dialog__title">Ваши данные:</h1>
          <div class="dialog__data">
            <h2>Ваш email: {{ user.email }}</h2>
            <h2>Ваш пароль: {{ user.pass }}</h2>
            <h2>Метод запроса: {{ authMethod }}</h2>
          </div>
        </modal-window>
        <auth-form
            :user="user"
            @create="showModal"
        />
      </div>
    </div>
  </main>
</template>

<script>
import SubscriptionForm from "../components/SubscriptionForm";
import AuthForm from "../components/AuthForm";
import ModalWindow from "../components/UI/ModalWindow";
export default {
  components: { ModalWindow, AuthForm, SubscriptionForm },
  data() {
    return {
      user: {
        email: '',
        pass: ''
      },
      dialogVisible: false,
      authMethod: ''
    }
  },
  methods: {
    showModal(user, method) {
      this.authMethod = method;
      this.dialogVisible = true;
    }
  }
}
</script>

<style scoped>
  .subscription {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 50px;
  }

  .subscription__element {
    min-height: 48px;
  }
  .subscription-auth {
    margin-top: 100px;
  }
</style>