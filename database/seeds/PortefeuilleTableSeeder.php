<?php

use Illuminate\Database\Seeder;

class PortefeuilleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portefeuille')->delete();
        DB::table('portefeuille')->insert(array(
            'dateOrdre'       => '15/11/2017',
            'datePrevue'      => 'OCT',
            'dateLivraison'   => '17/11/2017',
            'idClient'        => 1,
            'assurance'       => 2,
            'idCredit'        => 1,
            'idOrganisme'     => 1,
            'amount_given'    => 14500,
            'amount_eligible' => 14500,
            'dateReceived'    => '21/11/2017',
            'datePaid'        => '21/11/2017',
            'approved'        => true,
            'idDossier'       => '17591066CREO',
            'gcapp'           => true,
            'aut'             => true,
            'vnvo'            => 1,
            'comment'         => 'GCA VIP + GLD'
        ));

        DB::table('portefeuille')->insert(array(
            'dateOrdre'       => '03/11/2017',
            'datePrevue'      => '',
            'dateLivraison'   => '17/11/2017',
            'idClient'        => 2,
            'assurance'       => 3,
            'idCredit'        => 2,
            'idOrganisme'     => 2,
            'amount_given'    => 9000,
            'amount_eligible' => 9000,
            'dateReceived'    => '21/11/2017',
            'datePaid'        => '',
            'approved'        => false,
            'idDossier'       => '1988956',
            'gcapp'           => true,
            'aut'             => true,
            'vnvo'            => 2,
            'comment'         => 'PACK IDEAL'
        ));
    }
}
