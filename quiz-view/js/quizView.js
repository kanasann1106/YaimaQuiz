var questionNum = 1;
var nextCounter = 0;
var quiz = new Vue({
	el: '#quiz',
	data: {
		question:{id: 1, sentence: '与那国の方言で「ありがとう」はなんという？'},
		choices: [
			{message: 'ふがらっさ'},
			{message: 'かむさー'},
			{message: 'てんきゅー'}
		],
		btnname:'次へ',
		showQuestion: true,
		showExplain: false,
		showResult: false,
	},
	methods: {
			start: function(){
				window.location.href = 'quiz.html'; 
			},
			showAnswer: function(){
				this.showQuestion = !this.showQuestion //false
				this.showExplain = !this.showExplain //true
			},
			next: function(){
				nextCounter++
				console.log(nextCounter)
				if(nextCounter < questionNum){
					this.showQuestion = !this.showQuestion //true
					this.showExplain = !this.showExplain //false
					btnname = '結果へ'
				}else{
					this.showResult = !this.showResult //true
					this.showExplain //ture

				}

			},
		}
})
