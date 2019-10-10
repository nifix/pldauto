@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-users" aria-hidden="true"></i> Liste des vendeurs</div>

                <div class="panel-body">

                    @if (Auth::user()->rights > 5)
                        <div class="alert alert-danger">
                            Accés refusé.
                        </div>         
                    @else
                        @include('vendors.vendorslist')
                    @endif  

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
