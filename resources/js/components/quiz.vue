<template>
    <main id="quiz" class="cantainer">
        <article id="question">
            <section>
                <h1>問題 {{quizNum}}.{{ quizzes[quizNum - 1].title }} </h1>

                <div v-if="showQuiz">
                    <div class="img-wrap">
                        <!--<img src="{{ asset('image/uma.jpg')}}" alt="クイズ画像">-->
                    </div>
                    <div id="answer-choices">
                        <ul>
                            <li v-on:click="showAnswer(index)">
                                {{ quizzes[quizNum-1].correct }}
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="explain" v-if="showExplain">
                    <h2 v-if="judgment"><i class="far fa-circle mr-4"></i>正解！</h2>
                    <h2 v-else><i class="fas fa-times mr-4"></i>不正解</h2>
                    <p><strong>解説：</strong>{{quizzes[quizNum-1].explain_sentence}}</p>
                    <button v-on:click="next()" type="button" class="btn btn-primary rounded-pill btn-block">次へ</button>
                </div>
                <!--<quiz-explain ref="explain" v-bind:quizData="quizData",quizNum="quizNum",judgment="judgment"></quiz-explain>-->
            </section>
        </article>

        <quiz-result ref="result" v-bind:totalCorrectNum="totalCorrectNum"></quiz-result>

    </main>
</template>

<script>
    import quizResult from './quizResult'
    import quizExplain from "./quizExplain";
    export default{
        name: 'quiz',
        components:{
            quizExplain,
            quizResult
        },
        mounted() {
            var self = this;
            var url = '/ajax/quiz';
            axios.get(url).then(function(response){
                self.quizzes = response.data;
            });
        },
        data: function(){
            return{
                quizNum: 1,
                totalQuizNum: 5,
                quizzes: {},
                showQuiz: true,
                showExplain: false,
                judgment: '',
                totalCorrectNum: 0
            }
        },
        methods: {
            showAnswer: function(index){
                this.showQuiz = !this.showQuiz //false
                this.showExplain = !this.showExplain //true

                if(index === 0){
                    this.judgment = true
                    this.totalCorrectNum++
                    this.$refs.totalCorrectNum
                }else{
                    this.judgment = false
                }
            },
            next: function(){
                if(this.quizNum < this.totalQuizNum){
                    this.showQuiz = true
                    this.showExplain = false
                    this.quizNum++
                    this.nextCounter++
                }else{
                    this.$refs.result.showResult()
                }
            },
        }
    }
</script>

<style scoped>

</style>
