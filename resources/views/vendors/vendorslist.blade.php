@push('scripts')
      <script src="{{ asset('js/vendors.js') }}"></script>
@endpush

  <div id="panelAlert" class="panel panel-danger hidden">
    <div class="panel-heading">Alerte</div>
    <div class="panel-body" id="return"></div>
  </div>

  <table id="vendorsList" class="table table-condensed table-hover table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Téléphone</th>
        <th>Société</th>
        <th>Site</th>
        <th style="width:20%;"></th>
      </tr>
    </thead>
    <tbody>

      @foreach ($vendorslist as $vdata)

        {{ $sCompany = "" }}
        {{ $sSite = "" }}
        <tr id="vendor-id-{{ $vdata->id }}">
          <td>{{ $vdata->id }}</td>
          <td>{{ $vdata->lastname }}</td>
          <td>{{ $vdata->firstname }}</td>
          <td>{{ $vdata->phone }}</td>
          @foreach ($companydata as $cdata)
            @if ($cdata->id == $vdata->company)                 
                @php $sCompany = $cdata->name; @endphp                
            @endif
          @endforeach
          @if ($sCompany != "")
            <td>{{ $sCompany }}</td>
          @else
            <td>Empty</td>
          @endif
          
          @foreach ($sitesdata as $sdata)
            @if (($vdata->company == $sdata->idCompany) && ($vdata->site == $sdata->id))             
                @php $sSite = $sdata->name; @endphp                
            @endif
          @endforeach
          @if ($sSite != "")
            <td>{{ $sSite }}</td>
          @else
            <td>Empty</td>
          @endif
          
          <td>
            <div class="btn-group">
              <a href="" id="viewLink" data-toggle="modal" data-target="#confirmation" data-id="{{ $vdata->id }}" class="btn btn-default btn-xs"><i class="fa fa-eye fa-fw" aria-hidden="true"></i>Voir</a></a>
              <a href="/vendors/edit/{{ $vdata->id }}" class="btn btn-default btn-xs"><i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>Editer</a>
              <a href=""id="viewLink" data-toggle="modal" data-target="#confirmation" data-id="{{ $vdata->id }}" class="btn btn-danger btn-xs"><i class="fa fa-trash fa-fw" aria-hidden="true"></i>Supprimer</a></a>
            </div> 
          </td>
        </tr>
      @endforeach

    </tbody>
  </table>

<div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-labelledby="confirmation" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content load_modal"></div>
    </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">Statistiques</div>
  <ul class="list-group">
    <li class="list-group-item">Nombre de vendeurs <span class="badge">{{ \VendorsHelper::getCount('all') }}</span></li>
    <li class="list-group-item">Nombre de vendeurs actifs <span class="badge" id="vendors-active">{{ \VendorsHelper::getCount('active') }}</span></li>
    <li class="list-group-item">Nombre de vendeurs désactivés <span class="badge" id="vendors-inactive">{{ \VendorsHelper::getCount('inactive') }}</span></li>
  </ul> 
</div>
