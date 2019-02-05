var question = new Vue({
	el: '#question',
	data: {
		question:{id: 1, sentence: '与那国の方言で「ありがとう」はなんという？'},
		answer_items: [
			{message: 'ふがらっさ'},
			{message: 'かむさー'},
			{message: 'てんきゅー'}
		]
	}
})