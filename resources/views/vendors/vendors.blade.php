@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Liste des vendeurs</div>

                <div class="panel-body">

                    @if (Auth::user()->rights > 1)
                        <div class="alert alert-danger">
                            Accés refusé.
                        </div>         
                    @else
                        @include('vendors');
                    @endif  

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
