<template>
	<main id="quiz" class="l-default cantainer">
		<article id="question">
			<section>
				<p v-if="alertMsg">クイズはまだ登録されていません。</p>
				<h1>問題 {{quizNum}}.{{quizzes[quizNum - 1].title}}</h1>
				<div v-if="showQuiz">
					<div v-if="quizzes[quizNum - 1].image_name">
						<div class="img-wrap">
							<img :src="quizzes[quizNum - 1].image_name" alt="クイズ画像">
						</div>
					</div>

					<div id="answer-choices">
						<ul v-for="choice in aChoice">
							<li @click="showAnswer(choice)">
								{{ choice }}
							</li>
						</ul>
					</div>
				</div>

				<div id="explain" v-if="showExplain">
					<h2 v-if="judgment"><i class="far fa-circle mr-4"></i>正解！</h2>
					<h2 v-else><i class="fas fa-times mr-4"></i>不正解</h2>
					<p><strong>解説：</strong>{{quizzes[quizNum-1].explain_sentence}}</p>
					<button @click="next()" type="button" class="btn btn-default rounded-pill btn-block">次へ</button>
				</div>
			</section>
		</article>

		<quiz-result ref="result" v-bind:totalCorrectNum="totalCorrectNum"></quiz-result>

	</main>
</template>

<script>
	import QuizResult from './QuizResult'
	export default {
		name: 'quiz',
		components: {
			QuizResult
		},
		data: function () {
			return {
				quizNum: 1,
				totalQuizNum: 5,
				totalCorrectNum: 0,
				quizzes: [],
				aChoice: [],
				showQuiz: true,
				showExplain: false,
				existImage: false,
				alertMsg: false,
				judgment: '',
				axiosUrl: ''
			}
		},
		created() {
			this.getQuizzes()
			//クイズが登録されていない場合のmsg表示
			if (true) {
				this.alertMsg = true
			}
		},
		methods: {
			getQuizzes: function () {
				let path = location.pathname;
				let pathNum = path.slice(-1) //ex. quiz/1 -> 1を取得
				if (path == '/quiz') {
					this.axiosUrl = 'ajax/menu'
				} else {
					this.axiosUrl = 'ajax/menu' + pathNum;
				}
				axios.get(this.axiosUrl).then(res => {
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