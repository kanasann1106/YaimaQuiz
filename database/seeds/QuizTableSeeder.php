<?php

use Illuminate\Database\Seeder;

class QuizTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$allquiz = [
			$quiz1 = [
				'user_id' => '1',
				'title' => '長命草を食べるとどうなるといわれている？',
				'correct' => '長生きできる',
				'uncorrect1' => '与那国馬になれる',
				'uncorrect2' => '空を飛べる',
				'explain_sentence' => '長命草には豊富な栄養素が含まれています。皆さんも摂取して健康長寿！',
				'category_id' => '2',
			],
			$quiz2 = [
				'user_id' => '2',
				'title' => '与那国島に生息している世界最大の蛾の名前は？',
				'correct' => 'ヨナグニサン',
				'uncorrect1' => 'サイトウサン',
				'uncorrect2' => 'オオシロサン',
				'explain_sentence' => '与那国島で初めて発見されたことから「ヨナグニサン」という名前になりました。羽を広げると18cm~24cmにもなります。（でか！）ちなみに与那国の方言では「アヤミハビル」と言います。',
				'category_id' => '3',
			],
			$quiz3 = [
				'user_id' => '3',
				'title' => '与那国島の方言で「ありがとう」はなんという？',
				'correct' => 'ふがらっさ〜',
				'uncorrect1' => 'てんきゅ〜',
				'uncorrect2' => 'かむさ〜',
				'explain_sentence' => '与那国の方言でありがとうは「ふがらっさー」と言います。ネイティブの発音はぜひ現地で聞いてみてね〜♪',
				'image_name' => 'images/uma.jpg',
				'category_id' => '4',
			],
			$quiz4 = [
				'user_id' => '4',
				'title' => '44与那国島の方言で「ありがとう」はなんという？',
				'correct' => 'ふがらっさ〜',
				'uncorrect1' => 'てんきゅ〜',
				'uncorrect2' => 'かむさ〜',
				'explain_sentence' => '与那国の方言でありがとうは「ふがらっさー」と言います。ネイティブの発音はぜひ現地で聞いてみてね〜♪',
				'image_name' => 'images/uma.jpg',
				'category_id' => '4',
				'delete_flg' => '1'
			],
			$quiz5 = [
				'user_id' => '1',
				'title' => '55与那国島の方言で「ありがとう」はなんという？',
				'correct' => 'ふがらっさ〜',
				'uncorrect1' => 'てんきゅ〜',
				'uncorrect2' => 'かむさ〜',
				'explain_sentence' => '与那国の方言でありがとうは「ふがらっさー」と言います。ネイティブの発音はぜひ現地で聞いてみてね〜♪',
				'image_name' => 'images/uma.jpg',
				'category_id' => '4',
			],
			$quiz6 = [
				'user_id' => '2',
				'title' => '66与那国島の方言で「ありがとう」はなんという？',
				'correct' => 'ふがらっさ〜',
				'uncorrect1' => 'てんきゅ〜',
				'uncorrect2' => 'かむさ〜',
				'explain_sentence' => '与那国の方言でありがとうは「ふがらっさー」と言います。ネイティブの発音はぜひ現地で聞いてみてね〜♪',
				'category_id' => '2',
			]
		];

		foreach ($allquiz as $quiz) {
			DB::table('quizzes')->insert($quiz);
		}
	}
}
