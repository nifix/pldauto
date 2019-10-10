@if (Auth::user() && (Auth::user()->rights != 1000))
<ul class="nav navbar-nav">

	<li><a href="home"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
	
	<li class="dropdown">
	    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-building-o" aria-hidden="true"></i> Entreprises <span class="caret"></span></a>
	    <ul class="dropdown-menu">
	    	@foreach ($companydata as $cdata)
		    	<li><a href="view/{{ $cdata->id }}">{{ $cdata->name}}</a></li>
		    @endforeach 
	    </ul>
	</li>

	@if (Auth::user() && (Auth::user()->rights <= 5))
		<li><a href="vendors"><i class="fa fa-users" aria-hidden="true"></i> Vendeurs</a></li>
	@endif

	@if (Auth::user() && (Auth::user()->rights == 0))
		<li class="dropdown">
		    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-lock" aria-hidden="true"></i> Admin<span class="caret"></span></a>
		    <ul class="dropdown-menu">
			    <li><a href="history">Logs</a></li>
		    </ul>
		</li>
	@endif



</ul>
@endif

