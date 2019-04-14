<template>
  <header>
    <h1><a href="/quiz">八重山クイズ</a></h1>
    <div class="sp-menu js-toggle-nav">
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