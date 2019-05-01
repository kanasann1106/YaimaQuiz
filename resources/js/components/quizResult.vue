<template>
	<article id="result" v-if="show">
		<section>
			<h1>クイズ結果</h1>
			<p v-if="totalCorrectNum > 0">{{totalCorrectNum}}問正解！</p>
			<p v-else>残念。。もう１度挑戦してみましょう！</p>
			<div class="container">
				<div class="row">
					<div class="col-md-5 offset-md-1">
						<button @click="start" type="button" class="btn btn-default rounded-pill btn-block">リトライ</button>
					</div>
					<div class="col-md-5">
						<button type="button" class="btn btn-default rounded-pill btn-block"><i
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
				show: false
			}
		},
		methods: {
			showResult: function () {
				this.show = !this.show //true
				// this.$emit('show', this.show)
			},
			start: function () {
				window.location.href = '/quiz';
			}
		}

	}
</script>

<style scoped>

</style>