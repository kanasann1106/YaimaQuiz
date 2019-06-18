<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$users = [
			$user1 = [
				'email' => 'machimachiko.kn11@gmail.com',
				'password' => 'kanakana',
				'quiz_auth_flg' => 1,

			],
			$user2 = [
				'email' => 'yome@email.com',
				'password' => 'yomeyome',
				'quiz_auth_flg' => 1,

			],
			$user3 = [
				'email' => 'ema@email.com',
				'password' => 'emaemaema',
				'quiz_auth_flg' => 0,

			],
			$user4 = [
				'email' => 'oshiro@email.com',
				'password' => 'oshirooshiro',
				'quiz_auth_flg' => 0,

			]
		];

		foreach ($users as $user) {
			DB::table('users')->insert($user);
		}
	}
}
