
// load more post
jQuery(document).ready(function ($) {


    $(document).on('click', '.btn-black', function (event) {

        event.preventDefault();

        var $this = $(this);

        
        $this.text('Loading . . .');

        var $page = parseInt($this.data('page'));

        $.ajax({


            url : data.ajax_url,
            type : 'post',
            dataType: 'json',

            data:{

                action: 'load_more_post',
                page : $page
            },

            success:function(response){

                if(parseInt(response.count) > 0){


                    $this.parent().before(response,content);
                    $this.data('page',parseInt($page+1));
                    

                }
                $this.text('Load More');

            },
            error:function(){}

        })

    })


});
