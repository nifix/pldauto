    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-exclamation-triangle fa-fw fa-lg" aria-hidden="true"></i>Confirmation...</h4>
      </div>
      <div class="modal-body">
          <div id="warning" class="panel panel-danger">
            <div class="panel-heading">ATTENTION</div>
            <div class="panel-body">
              <p>Voulez-vous vraiment supprimer le vendeur n°{{ $id }} ?</p>
              @foreach ($vendorslist as $vdata)
                @if ($vdata->id == $id)
                  <p><b>ID</b> : {{ $vdata->id }}</p>
                  <p><b>Nom</b> : {{ $vdata->lastname }}</p>
                  <p><b>Prénom</b> : {{ $vdata->firstname }}</p>
                  <p><b>Téléphone</b> : {{ $vdata->phone }}</p>
                @endif
              @endforeach
              <p style="color:red;">Cette action est irréversible.</p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
          <button type="button" id="applyChange" data-id="{{ $id }}" class="btn btn-danger deleteVendor" data-slug="">Supprimer</button>
      </div>
    </div>
