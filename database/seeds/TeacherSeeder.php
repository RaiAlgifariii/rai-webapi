<?php

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Teacher::create(
        	[
        	'nama' => 'Koro-Sensei',
        	'jk' => 'Tentacle'
      	]
      	);
      	\App\Teacher::create(
        	[
        	'nama' => 'Guru perempuan',
        	'jk' => 'P'
      	]
      	);

    }
}
