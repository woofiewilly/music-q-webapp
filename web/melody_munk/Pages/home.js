$(function() {


    //Input fields
    var playlist_name = $('#playlist_name_content');

    var playlist_submit = $('#playlist_add_submit');


    playlist_submit.on('click', function() {


        var content = playlist_name.val();

        $.ajax({
            type: 'POST',
            url: '/ajax_create_playlist',
            data: {
                name: content
            },
            error: function(e) {
                console.log(e);
            },
            success: function(response) {
                console.log(response);
                window.location.reload();
            }

        })


    });



});