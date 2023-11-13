jQuery(document).ready(function($) {
    var page = 1;
    var loading = false;
    var $loadMoreButton = $('.nav-previous .nav-link');

    $loadMoreButton.on('click', function(e) {
        e.preventDefault();
        if (!loading) {
            loading = true;
            page++;
            var data = {
                action: 'load_more_podcasts',
                page: page,
            };
            $.ajax({
                type: 'POST',
                url: ajax_object.ajax_url,
                data: data,
                success: function(response) {
                    if (response) {
                        $('.podcast-items-container').append(response);
                        loading = false;
                        if (page >= ajax_object.max_pages) {
                            $loadMoreButton.hide();
                        }
                    }
                }
            });
        }
    });
});
