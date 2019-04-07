<template>
	<main id="quiz" class="cantainer">
		<article id="question">
			<section>
				<h1>問題 {{quizNum}}.{{quizzes[quizNum - 1].title}}</h1>
				<div v-if="showQuiz">
					<div v-if="quizzes[quizNum - 1].image_name">
						<div class="img-wrap">
							<img :src="quizzes[quizNum - 1].image_name" alt="クイズ画像">
						</div>
					</div>

					<div id="answer-choices">
						<ul v-for="choice in aChoice">
							<li v-on:click="showAnswer(choice)">
								{{ choice }}
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
			</section>
		</article>

		<quiz-result ref="result" v-bind:totalCorrectNum="totalCorrectNum"></quiz-result>

	</main>
</template>

<script>
	import quizResult from './quizResult'
	export default {
		name: 'quiz',
		components: {
			quizResult
		},
		data: function () {
			return {
				quizNum: 1,
				totalQuizNum: 5,
				quizzes: [],
				aChoice: [],
				showQuiz: true,
				showExplain: false,
				existImage: false,
				judgment: '',
				totalCorrectNum: 0
			}
		},
		created() {
			this.getQuizzes()
		},
		methods: {
			getQuizzes: function () {
				const url = '/ajax/quiz';
				axios.get(url).then(res => {
					this.quizzes = res.data;
					this.getChoice(this.quizNum - 1)
				})
					.catch(error => {
						console.log(error);
					});
			},
			getChoice: function (index) {
				//前回の選択肢を削除してから新しく選択肢を追加する
				this.aChoice = []
				this.aChoice.push(this.quizzes[index].correct, this.quizzes[index].uncorrect1, this.quizzes[index].uncorrect2)
			},
			showAnswer: function (choice) {
				this.showQuiz = !this.showQuiz //false
				this.showExplain = !this.showExplain //true

				let answer = this.quizzes[this.quizNum - 1].correct
				if (choice === answer) {
					this.judgment = true
					this.totalCorrectNum++
					this.$refs.totalCorrectNum
				} else {
					this.judgment = false
				}
			},
			next: function () {
				if (this.quizNum < this.totalQuizNum) {
					this.showQuiz = true
					this.showExplain = false
					this.quizNum++
					this.nextCounter++
					this.getChoice(this.quizNum - 1)
				} else {
					this.$refs.result.showResult()
				}
			},
		}
	}
</script>

<style scoped>

</style>