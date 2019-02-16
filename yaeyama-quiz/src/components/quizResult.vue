<template>
	<article id="result" v-if="show">
		<section>
			<h1>クイズ結果</h1>
			<p>3問正解！</p>
			<div class="container">
				<div class="row">
					<div class="col-md-5 offset-md-1">
						<button v-on:click="start()" type="button" class="btn btn-primary rounded-pill btn-block">リトライ</button>
					</div>
					<div class="col-md-5">
						<button type="button" class="btn btn-primary rounded-pill btn-block"><i class="fab fa-twitter fa-lg mr-3"></i>ツイート</button>
					</div>
				</div>
			</div>
		</section>
	</article>
</template>

<script>
export default{
	name: 'quizResult',
	data: function(){
		return{
			show: false
		}
	},
	methods: {
		showResult: function(){
			this.show = !this.show //true
			// this.$emit('show', this.show)
		},
		start: function(){
			window.location.href = '/';
		}
	}

}
</script>

<style>
#result{
	border: 1px solid #000;
	border-radius: 24px;
	-webkit-border-radius: 24px;
	-moz-border-radius: 24px;
	padding: 40px 0;
	width: 72%;
	margin: 0 auto;
	text-align: center;
	position: absolute;
	top: 160px;
	left: 14%;
	background: #eee;
	box-shadow: 0 4px 16px rgba(0,0,0,0.3);
	animation: SlideDown 1.5s;
}
#result h1{
	font-size: 32px;
	margin-bottom: 16px;
}
#result p{
	font-size: 24px;
	margin-bottom: 24px;
}
#result button{
	margin-top: 24px;
	height: 56px;
}
@media screen and (max-width: 600px){
	#result{
		width: 88%;
		left: 6%;
	}
}
</style>