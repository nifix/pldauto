@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-history" aria-hidden="true"></i>  Historique des opérations</div>

                <div class="panel-body">

                    @if (Auth::user()->rights > 0)
                        <div class="alert alert-danger">
                            Accés refusé.
                        </div>         
                    @else
                    <div id="testdata">
                        <table id="testtable" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Test</th>
                                    <th>Bonjour</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                </tr>               
                            </tbody>
                        </table>

                        @include('history.historylist')
                    @endif  

                </div>
            </div>
        </div>
    </div>
</div>
@endsection