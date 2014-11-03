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
		\DB::table('kkstudio_themes')->delete();
		\DB::table('kkstudio_modules')->delete();

		\App\User::create([

			'email' => 'user@kkstudio.eu',
			'password' => \Hash::make('password123'),
			'level' => 1337

		]);

		\App\Theme::create([

			'slug' => 'default',
			'name' => 'Szablon podstawowy',
			'image' => 'image.png',
			'colors' => json_encode(['navbar' => '#eeeeee']),
			'provides' => 'blog|gallery|info|menu|portfolio|page'


		]);

		\DB::table('kkstudio_modules')->insert([

			'slug' => 'blog',
			'name' => 'Blog',
			'icon' => 'comment',
			'description' => '',
			'status' => 'enabled',
			'settings' => '{}',

			'created_at' => \Carbon\Carbon::now(),
			'updated_at' => \Carbon\Carbon::now()

		]);

		\DB::table('kkstudio_modules')->insert([

			'slug' => 'page',
			'name' => 'Strony',
			'icon' => 'file',
			'description' => '',
			'status' => 'enabled',
			'settings' => '{}',

			'created_at' => \Carbon\Carbon::now(),
			'updated_at' => \Carbon\Carbon::now()

		]);

		\DB::table('kkstudio_modules')->insert([

			'slug' => 'info',
			'name' => 'Informacje',
			'icon' => 'user',
			'description' => '',
			'status' => 'enabled',
			'settings' => '{}',

			'created_at' => \Carbon\Carbon::now(),
			'updated_at' => \Carbon\Carbon::now()

		]);

		\DB::table('kkstudio_modules')->insert([

			'slug' => 'menu',
			'name' => 'Menu',
			'icon' => 'list-alt',
			'description' => '',
			'status' => 'enabled',
			'settings' => '{}',

			'created_at' => \Carbon\Carbon::now(),
			'updated_at' => \Carbon\Carbon::now()

		]);

		\DB::table('kkstudio_modules')->insert([

			'slug' => 'portfolio',
			'name' => 'Portfolio',
			'icon' => 'camera',
			'description' => '',
			'status' => 'enabled',
			'settings' => '{}',

			'created_at' => \Carbon\Carbon::now(),
			'updated_at' => \Carbon\Carbon::now()

		]);

		\DB::table('kkstudio_modules')->insert([

			'slug' => 'gallery',
			'name' => 'Galerie',
			'icon' => 'picture',
			'description' => '',
			'status' => 'enabled',
			'settings' => '{}',

			'created_at' => \Carbon\Carbon::now(),
			'updated_at' => \Carbon\Carbon::now()

		]);



	}

}
