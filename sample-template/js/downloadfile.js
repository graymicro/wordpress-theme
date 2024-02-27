jQuery(document).ready(function ($) {


    $(document).on('click', '.download_file', function (event) {
        event.PreventDefault(); 
        var $this = $(this);
        var $post_id = $this.data('id');

        $.ajax({

            url: ajax_object.ajax_url,
            type: 'POST',
            data: {
                action: 'download_counter',
                post_id: $post_id,
            },
            success:function(response){


            },
            console:function(){}

        })
    })

});