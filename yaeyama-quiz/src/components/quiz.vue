<template>
<main id="quiz" class="cantainer">
	<article id="question">
		<section>
			<h1>問題 {{quizNum}}. {{quizData[quizNum-1].q}}</h1>
			<div v-if="showQuiz">
				<div class="img-wrap">
					<img src="@/assets/uma.jpg">
				</div>
				<div id="answer-choices">
					<ul>
						<li v-for="(choice, index) in quizData[quizNum-1].a" v-on:click="showAnswer(index)">
							{{ choice }}
						</li>
					</ul>
				</div>
			</div>

			<div id="explain" v-if="showExplain">
				<h2 v-if="judgment"><i class="far fa-circle mr-4"></i>正解！</h2>
				<h2 v-else><i class="fas fa-times mr-4"></i></i>不正解</h2>
				<p><strong>解説：</strong>{{quizData[quizNum-1].e}}</p>
				<button v-on:click="next()" type="button" class="btn btn-primary rounded-pill btn-block">次へ</button>
			</div>
		</section>
	</article>

	<quiz-result ref="result" v-bind:totalCorrectNum="totalCorrectNum"></quiz-result>

</main>

</template>

<script>
import quizResult from '@/components/quizResult'
export default{
	name: 'quiz',
	components:{
		quizResult
	},
	data: function(){
		return{
			quizNum: 1,
			totalQuizNum: 2,
			quizData: [
				{q: '与那国島から台湾までの距離はどのくらいでしょう？', a: ['111km','222km','333km'], e: '台湾までの距離は111kmです。たまーに西崎灯台から台湾が見えます！ちなみに石垣島との距離は127kmです。台湾の方が近い！！(笑)'},
				{q: '与那国島の山の中には不思議な岩がありますがどんな岩でしょう？', a: ['人面岩','光岩','浮遊岩'], e: '人面岩は島の南側の「新川鼻」という岬の高台にあります。獣道を進んでいくと目の前に人面岩が現れます！ちょっとした冒険みたいで楽しいですよ〜♪'},
				{q: '与那国島は日本のどこにある？', a: ['日本最西端','日本最東端','日本最北端'], e: '与那国島は日本の最西端の島で、沖縄県八重山諸島の一番西の端っこにあります。すぐお隣には台湾があります。（頑張れば泳げると思う。頑張れば。。）'},
				{q: '小学校は何校あるでしょう？', a: ['3校','6校','9校'], e: '小学校は3校です。与那国小学校と久部良小学校と比川小学校があります。'},
				{q: '与那国島の人口はおおよそ何人？', a: ['1700人','540人','15000人'], e: '2018/07/31現在の人口は1680人です。外出先で知り合いに遭遇する確率100%(笑)'},
			],
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
/*------------------------
	explain
------------------------*/
#explain{
	border: 4px solid #80cee0;
	border-radius: 8px;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	margin-top: 32px;
	padding: 16px;
}
#explain h2{
	text-align: center;
	margin-bottom: 16px;
	font-weight: bold;
}
#explain p{
	font-size: 20px;
}
#explain button{
	width: 56%;
	height: 56px;
	margin: 16px auto 0 auto;
}
</style>