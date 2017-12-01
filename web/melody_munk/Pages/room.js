$(function() {


    //Input fields
    var roomID = $('#mm_room_id').val();


    var host_review_content = $('#mm_host_review_content');
    var host_review_submit = $('#mm_host_review_submit');

    var mm_reported_users = $('#mm_reported_users');


    var mm_report_user_btn = $('.mm_report_user_btn');


    var mm_submit_song_rec = $('#submit_song_suggestion');
    var mm_song_rec_name = $('#mm_song_rec_name');
    var mm_song_rec_artist = $('#mm_song_rec_artist');


    host_review_submit.on('click', function() {

        var content = host_review_content.val();

        $.ajax({
            type: 'POST',
            url: '/ajax_submit_host_review',
            data: {
                room_id: roomID,
                review_content: content
            },
            error: function(e) {
                console.log(e);
            },
            success: function(response) {
                console.log(response);
                window.location.reload();
            }

        });


    });

    $('#spotifyloginbutton').click(
        function ()
        {
            console.log('click registered');
            $.getJSON('/getauthorizeurl/', function(data) {
                console.log('Got response');
                console.log(JSON.stringify(data));
                var callbackurl = data.redirect_url;
                console.log(callbackurl);
                window.location = callbackurl;
            }).fail(function (data) {
                console.log('failure');
                console.log(JSON.stringify(data));
            });
        }
    );


    $('#op2').click( function() {
        console.log("explicit checked")
        $.ajax({
            type: 'POST',
            url: '/explicit/',
            data: {
                room_id: roomID,
                value: document.getElementById('op2').checked
            },
            error: function (e) {
                console.log(e);
            },
            success: function (response) {
                console.log(response);
            }

        });
    });
    $('#playbutton').click( function() {
        console.log("playback started")
        $.ajax({
            type: 'POST',
            url: '/play/',
            data: {
                room_id: roomID,
            },
            error: function (e) {
                console.log(e);
            },
            success: function (response) {
                console.log(response);
            }

        });
    });
    $('#pausebutton').click( function() {
        console.log("playback paused")
        $.ajax({
            type: 'POST',
            url: '/pause/',
            data: {
                room_id: roomID,
            },
            error: function (e) {
                console.log(e);
            },
            success: function (response) {
                console.log(response);
            }

        });
    });
    $('#raisevolumebutton').click( function() {
        console.log("Volume Raised")
        $.ajax({
            type: 'POST',
            url: '/raisevolume/',
            data: {
                room_id: roomID,
            },
            error: function (e) {
                console.log(e);
            },
            success: function (response) {
                console.log(response);
            }

        });
    });
    $('#lowervolumebutton').click( function() {
        console.log("Volume Lowered")
        $.ajax({
            type: 'POST',
            url: '/lowervolume/',
            data: {
                room_id: roomID,
            },
            error: function (e) {
                console.log(e);
            },
            success: function (response) {
                console.log(response);
            }

        });
    });
    $('#nextsong').click( function() {
        console.log("Next Song")
        $.ajax({
            type: 'POST',
            url: '/nextsong/',
            data: {
                room_id: roomID,
            },
            error: function (e) {
                console.log(e);
            },
            success: function (response) {
                console.log(response);
            }

        });
    });
    $('#prevsong').click( function() {
        console.log("Previous Song")
        $.ajax({
            type: 'POST',
            url: '/prevsong/',
            data: {
                room_id: roomID,
            },
            error: function (e) {
                console.log(e);
            },
            success: function (response) {
                console.log(response);
            }

        });
    });

    $('#search').on('keyup', function() {

        var searchText = $(this).val();

        if (searchText === '') {
            $('#mm_search_results').empty();
            return;
        }

        $.ajax({
            type: "POST",
            url: "/search/",
            dataType: "json",
            data: {
                room_id: roomID,
                searchText : searchText
            },
            error: function(e) {
                console.log(e);
            },
            success : function(response)
            {
                console.log(response);

                $('#mm_search_results').empty();

                $.each(response.results.tracks.items, function(i, item) {
                    console.log(item);
                    $('#mm_search_results').append('<label>' + item.name + '</label>');
                });

                $('#mm_search_dropdown').attr('class', '');

            }
        });
    });


    mm_submit_song_rec.on('click', function() {

        $.ajax({
            type: 'POST',
            url: '/ajax_recommend_song',
            data: {
                roomID: roomID,
                songName: mm_song_rec_name.val(),
                songArtist: mm_song_rec_artist.val()
            },
            error: function(e) {
                console.log(e);
            },
            success: function(response) {
                console.log(response);
                window.location.reload();
            }
        });


    });


    var dropdown = $('.dropdown');
    var item = $('.item');

    item.on('click', function() {
        item.toggleClass('collapse');

        if (dropdown.hasClass('dropped')) {
            dropdown.toggleClass('dropped');
        } else {
            setTimeout(function() {
                dropdown.toggleClass('dropped');
            }, 150);
        }
    })

});
