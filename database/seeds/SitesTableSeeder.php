<?php

use Illuminate\Database\Seeder;

class SitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sites')->delete();

        DB::table('sites')->insert(array(
            'idCompany'  		=> 1,
        	'name' 				=> 'SALON',
            'address'           => '3 rue de salon',
            'phone'             => '044258787'
        ));
        
        DB::table('sites')->insert(array(
            'idCompany'  		=> 1,
        	'name'      		=> 'ISTRES',
            'address'           => '3 rue de istres',
            'phone'             => '044245878'
        ));
    }
}
