  <div id="panelAlert" class="panel panel-danger hidden">
    <div class="panel-heading">Alerte</div>
    <div class="panel-body" id="return"></div>
  </div>

  <table id="vendorsList" class="table table-condensed table-hover table-striped">
    <thead>
      <tr>
        <th style="width:3%">ID</th>
        <th style="width:15%">Date</th>
        <th style="width:15%">Nom d'utilisateur</th>
        <th>Log</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($historylist as $hdata)

        <tr id="history-id-{{ $hdata->id }}">
          <td>{{ $hdata->id }}</td>
          <td>{{ $hdata->date }}</td>
          <td>{{ $hdata->username }}</td>
          <td>{{ $hdata->msg }}</td>
        </tr>
      @endforeach

    </tbody>
  </table>
