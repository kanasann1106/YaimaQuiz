<template>
	<main id="quiz" class="l-default cantainer">
		<article id="question">
			<section>
				<div v-if="hidden">
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
				</div>

				<section class="alert_msg" v-if="alertMsg">
					<p><i class="far mr-2 fa-lg fa-tired"></i>クイズはまだ登録されていません。<i class="far fa-lg fa-tired"></i></p>
					<a href="quiz/">クイズTOPへ</a>
				</section>

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
				totalQuizNum: 0,
				totalCorrectNum: 0,
				quizzes: [{ title: '', correct: '', uncorrect1: '', uncorrect2: '', image_name: '', explain_sentence: '' }],
				aChoice: [],
				showQuiz: true,
				showExplain: false,
				existImage: false,
				hidden: false,
				alertMsg: false,
				judgment: '',
				axiosUrl: ''
			}
		},
		created() {
			//DOM構築前にクイズデータをaxiosで取得(そうしないとエラーでる↓)
			//"TypeError: Cannot read property 'title' of undefined"
			this.getQuizzes()
		},
		methods: {
			getQuizzes: function () {
				let quizUrl = location.pathname;
				let catId = quizUrl.match(/\d/g);
				let catNum;
				if (catId) {
					catNum = catId.join('');
				}

				if (quizUrl == '/quiz/' + catNum) {
					this.axiosUrl = 'ajax/menu' + catNum;
				} else if (quizUrl == '/quiz/region/' + catNum) {
					this.axiosUrl = 'ajax/region' + catNum;
				} else {
					this.axiosUrl = 'ajax/menu'
				}

				axios.get(this.axiosUrl).then(res => {
					this.quizzes = res.data;
					this.totalQuizNum = this.quizzes.length
					//クイズがある時はDOMを表示しクイズがない場合は無いですメッセージを表示
					if (this.totalQuizNum) {
						this.hidden = true
					} else {
						this.alertMsg = true
					}
					this.getChoice(this.quizNum - 1)
				})
					.catch(error => {
						console.log(error);
					});
			},
			shuffleAry: function (array) {
				const ary = array.slice();
				for (let i = ary.length - 1; 0 < i; i--) {
					let r = Math.floor(Math.random() * (i + 1));
					[ary[i], ary[r]] = [ary[r], ary[i]];
				}
				return ary;
			},
			getChoice: function (index) {
				//前回の選択肢を削除してから新しく選択肢を追加する
				this.aChoice = []
				this.aChoice.push(this.quizzes[index].correct, this.quizzes[index].uncorrect1, this.quizzes[index].uncorrect2)
				this.aChoice = this.shuffleAry(this.aChoice)
			},
			showAnswer: function (choice) {
				this.showQuiz = !this.showQuiz //false
				this.showExplain = !this.showExplain //true
				console.log(this.quizzes)

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