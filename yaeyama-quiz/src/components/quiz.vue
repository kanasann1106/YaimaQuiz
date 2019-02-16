<template>
<main id="quiz" class="cantainer">
	<article id="question">
		<section>
			<h1>問題 {{question.id}}. {{question.sentence}}</h1>
			<div v-if="show">
				<div class="img-wrap">
					<img src="@/assets/uma.jpg">
				</div>
				<div id="answer-choices">
					<ul>
						<li v-for="choice in choices" v-on:click="showAnswer()">
							{{ choice.message }}
						</li>
					</ul>
				</div>
			</div>

			<quiz-explain ref="explain" @showQuiz="hideAndShow" @endQuiz="alertResult"></quiz-explain>

		</section>

	</article>

	<quiz-result ref="result"></quiz-result>

</main>

</template>

<script>
import quizExplain from '@/components/quizExplain'
import quizResult from '@/components/quizResult'
export default{
	name: 'quiz',
	components:{
		quizExplain,
		quizResult
	},
	data: function(){
		return{
			question:{id: 1, sentence: '与那国の方言で「ありがとう」はなんという？'},
			choices: [
				{message: 'ふがらっさ'},
				{message: 'かむさー'},
				{message: 'てんきゅー'}
			],
			show: true,
		}
	},
	methods: {
		showAnswer: function(){
			this.show = !this.show //false
			this.$refs.explain.showExplain(this.show)
		},
		hideAndShow: function(tmp){
			if(!tmp){
				this.show = "true"
			}else{
				this.show = "false"
			}
		},
		alertResult: function(){
			this.$refs.result.showResult()
		}
	}
}
</script>

<style>
#question{
	/*opacity: .4;*/
}
#question h1{
	background: #ffc6e2;
	padding: 24px;
	border-radius: 8px;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	font-size: 24px;
}
.img-wrap{
	margin: 16px auto;
	width: 320px;
	height: 240px;
	border-radius: 16px;
	-webkit-border-radius: 16px;
	-moz-border-radius: 16px;
	overflow: hidden;
}
#question img{
	width: 100%;
	height: 100%;
	object-fit: cover;
}
#answer-choices li{
	font-size: 20px;
	margin: 16px 0;
	padding: 16px 24px;
	background: #eaeaea;
	border-radius: 8px;
	cursor: pointer;
}
#answer-choices li:hover{
	opacity: .7;
}
@media screen and (max-width: 856px){
	#question h1{
		font-size: 20px;
	}
	#answer-choices li{
		font-size: 16px;
	}
}
</style>