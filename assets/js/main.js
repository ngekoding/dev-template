var site_url = $('meta[name=site-url]').attr('content');

// Public functions
function goBack() {
    window.history.back();
}

function showToast(title, message, type) {
    $.toast({
        heading: '<b>' + title + '</b>',
        text: message,
        icon: type,
        position: 'bottom-right',
        loader: false
    });
}

$(document).ready(function() {
    
    $('[data-toggle="tooltip"]').tooltip(); 
    $('.select2').select2({
        placeholder: 'Select an option',
        allowClear: true,
    });
    $('.datatables').DataTable({
        "columnDefs": [
            {
                sortable: false,
                targets: [0, -1]
            }
        ],
        "order": [ ],
    });
    $('.date-picker').datetimepicker({
        format: 'DD/MM/YYYY'
    });
    $('.time-picker').datetimepicker({
        format: 'HH:mm'
    });
    $('.date-time-picker').datetimepicker({
        format: 'DD/MM/YYYY HH:mm'
    });

	$('.sidebar-menu a').on('click', function() {
		$(this).siblings('ul:first').not(':animated').slideToggle();
	});
    $('.sidebar-menu a.active').siblings('ul').show();

    // Delete confirmation
    $('#modal-delete').on('show.bs.modal', function(e) {
        var href  = $(e.relatedTarget).data('href');
        var title = $(e.relatedTarget).data('title');

        $(this).find('.title').html(title);

        $(this).find('.btn-delete').click(function() {
            window.location.href=href;
        });
    });

     // Responsive
    $('.btn-nav-toggle').click(function() {
        var viewportHeight = $('.sidebar').outerHeight();

        if ($('.sidebar').hasClass('hidden-xs')) {
            $('.sidebar').removeClass('hidden-xs');
            $('.sidebar').css({height: viewportHeight});
        } else {
            $('.sidebar').addClass('hidden-xs');
        }
    });
});