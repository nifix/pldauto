@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Compte bloqué.</div>

                <div class="panel-body">

					<div id="blocked" class="panel panel-danger">
						<div class="panel-heading">Compte bloqué</div>
						<div class="panel-body" id="blockedtext">
							Désolé, mais votre compte a été désactivé.
						</div>
					</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

