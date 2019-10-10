$('document').ready( function() {
    $('a#viewLink').on('click', function() {
        var this_id = $(this).attr('data-id');
        $.get('http://localhost/pld/public/vendors/confirm/' + this_id, function(data) {
            $('#confirmation').modal();
            $('#confirmation').on('shown.bs.modal', function(){
                $('#confirmation .load_modal').html(data);
            });
            $('#confirmation').on('hidden.bs.modal', function(){
                $('#confirmation .modal-body').data('');
            });
        });
    });
});

$('body').on('click','.deleteVendor', function()
{
    var this_id = $(this).attr('data-id');
    $.get('http://localhost/pld/public/vendors/delete/' + this_id, function(data) {
        $('#confirmation').modal('hide');
        $('#return').html(data);
        $('#panelAlert').removeClass('hidden');
        if (data == "Vendeur supprimé.") {
            $('#vendor-id-' + this_id).remove();
            $('#vendors-inactive').text((+$('#vendors-inactive').text() + 1));
            $('#vendors-active').text((+$('#vendors-active').text() - 1));
        }
        $('#panelAlert').fadeOut(6000, function() {
            $('#panelAlert').addClass('hidden');
        });

    });
});