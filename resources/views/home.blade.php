@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</div>

                <div class="panel-body">

                    @guest
                        <div class="alert alert-danger">
                            <b>Erreur</b> Vous devez vous authentifier.
                        </div>
                    @else

                        <div class="row">
                            <div class="col-lg-3">
                                <h4 style="text-align:center">Rendement</h4>
                                <div id="rendement"></div>
                            </div>
                            <div class="col-lg-3">
                                <h4 style="text-align:center">Financement payés</h4>
                                <div id="paid"></div>
                            </div>
                            <div class="col-lg-3">
                                <h4 style="text-align:center">Troisième graph</h4>
                                <div id="graph3"></div>
                            </div>
                            <div class="col-lg-3">
                                <h4 style="text-align:center">Quatrième graph</h4>
                                <div id="graph4"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i> <b>Informations</b></div>
                                    <div class="panel-body">
                                        <p>Info 1</p>
                                        <p>Info 2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><i class="fa fa-money fa-fw" aria-hidden="true"></i> <b>Vendeurs</b></div>
                                    <div class="panel-body">
                                        <p>Vendeurs actifs : 12</p>
                                        <p>Vendeurs désactivés : 2</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><i class="fa fa-history fa-fw" aria-hidden="true"></i> <b>Historique des opérations</b></div>
                                    <div class="panel-body">
                                        <p>test0 a supprimé le vendeur X</p>
                                        <p>test0 a ajouté un financement</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    @endguest                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
