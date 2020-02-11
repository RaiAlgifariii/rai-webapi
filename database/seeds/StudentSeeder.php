<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Student::create(
        	[
        	'nama' => 'Rai',
        	'jk' => 'L'
      	]
      	);
      	\App\Student::create(
        	[
        	'nama' => 'Awakusu Kai',
        	'jk' => 'P'
      	]
      	);

    }

}
