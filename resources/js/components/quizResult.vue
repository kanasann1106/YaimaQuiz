<template>
  <article class="p-quiz__result" v-if="show">
    <section>
      <h1>クイズ結果</h1>
      <p v-if="totalCorrectNum > 0">{{totalCorrectNum}}問正解！</p>
      <p v-else>残念。。もう１度挑戦してみましょう！</p>
      <div class="container">
        <div class="row">
          <div class="col-md-5 offset-md-1">
            <button @click="start" type="button" class="btn btn-default">リトライ</button>
          </div>
          <div class="col-md-5">
            <button @click="tweet" type="button" class="btn btn-default"><i
                class="fab fa-twitter fa-lg mr-3"></i>ツイート</button>
          </div>
        </div>
      </div>
    </section>
  </article>
</template>

<script>
  export default {
    name: 'quizResult',
    props: ['totalCorrectNum'],
    data: function () {
      return {
        show: false,
      }
    },
    methods: {
      showResult: function () {
        this.show = !this.show //true
      },
      start: function () {
        window.location.href = '/quiz';
      },
      tweet: function () {
        if (this.totalCorrectNum > 0) {
          open('https://twitter.com/intent/tweet?text=' + this.totalCorrectNum + '%E5%95%8F%E6%AD%A3%E8%A7%A3%E3%81%97%E3%81%BE%E3%81%97%E3%81%9F%EF%BC%81%0A%0A&url=https%3A%2F%2Fyaima-quiz.kanasann.com&hashtags=%E3%82%84%E3%81%84%E3%81%BE%E3%82%AF%E3%82%A4%E3%82%BA%2C%E5%85%AB%E9%87%8D%E5%B1%B1%2C%E6%B2%96%E7%B8%84', '_blank');
        } else {
          open('https://twitter.com/intent/tweet?text=%E6%AE%8B%E5%BF%B5%EF%BC%81%E5%85%A8%E5%95%8F%E4%B8%8D%E6%AD%A3%E8%A7%A3%E3%80%82%E3%80%82(%3E_%3C)%0A%E3%82%82%E3%81%86%E4%B8%80%E5%BA%A6%E3%83%81%E3%83%A3%E3%83%AC%E3%83%B3%E3%82%B8%E3%81%97%E3%81%A6%E3%81%BF%E3%82%88%E3%81%86%E2%99%AA&url=https%3A%2F%2Fyaima-quiz.kanasann.com&hashtags=%E3%82%84%E3%81%84%E3%81%BE%E3%82%AF%E3%82%A4%E3%82%BA%2C%E5%85%AB%E9%87%8D%E5%B1%B1%2C%E6%B2%96%E7%B8%84', '_blank');
        }
      }
    }
  }
</script>

<style scoped>
</style>