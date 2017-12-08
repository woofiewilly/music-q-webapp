$(function() {


    //Input fields
    var playlist_name = $('#playlist_name_content');

    var playlist_submit = $('#mm_create_room_submit');

    var join_room_submit = $('#mm_join_room_btn');



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
                window.location.assign('/playlist_page/' + response.playlistID);
            }

        })


    });


    join_room_submit.on('click', function() {

        window.location.assign('/room/' + $('#join_room_content').val());
    });



});