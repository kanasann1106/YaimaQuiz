<template>
  <header class="fixed">
    <h1><a href="/">やいまクイズ</a></h1>
    <div class="c-menu-button js-toggle-nav">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <quiz-menu />

  </header>
</template>

<script>
  import QuizMenu from './QuizMenu'
  export default {
    name: 'QuizHeader',
    components: {
      QuizMenu
    }
  }
</script>

<style scoped>

</style>