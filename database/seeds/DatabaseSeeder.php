<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		DB::statement('SET FOREIGN_KEY_CHECKS=0');
		DB::table('authors')->truncate();
		DB::table('books')->truncate();
		DB::table('publishers')->truncate();
		DB::table('book_publisher')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
		
		for ($recordNb = 1; $recordNb <= 10; $recordNb++) {
			DB::table('book_publisher')->insert(
				[
					'book_id' => factory(App\Book::class)->create()->id,
					'publisher_id' => factory(App\Publisher::class)->create()->id
				]
			);
		}
	}
}
