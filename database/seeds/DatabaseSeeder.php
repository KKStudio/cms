<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->admin();
	}

	private function admin() 
	{

		\DB::table('kkstudio_users')->delete();

		\App\User::create([

			'email' => 'user@kkstudio.eu',
			'password' => \Hash::make('password123')

		]);

	}

}
