<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->delete();
        for ($i = 0; $i <= 5; $i++) {
	        DB::table('companies')->insert(array(
                'name'  	=> 'Entreprise n°'.$i,
	        	'address'	=> '12 av du moooo Moogeg'.str_random(10),
	        	'phone'		=> '04'.str_random(10),
	        	'is_active'	=> 1
	        ));
    	}
    }
}
