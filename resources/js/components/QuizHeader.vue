<template>
  <header class="l-header">
    <div class="p-logo">
      <a href="/">やいまクイズ</a>
    </div>
    <div class="c-menu-button js-toggle-nav">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <quiz-menu/>
  </header>
</template>

<script>
import QuizMenu from "./QuizMenu";
export default {
  name: "QuizHeader",
  components: {
    QuizMenu
  }
};
</script>

<style scoped>
</style>