$(function() {


    //Input fields
    var roomID = $('#mm_room_id').val();


    var host_review_content = $('#mm_host_review_content');
    var host_review_submit = $('#mm_host_review_submit');


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

    $(document).ready(function() {
        $('#spotifyloginbutton').click(
            function ()
            {
                console.log('click registered');
                $.getJSON('/getauthorizeurl/', function(data) {
                    console.log('Got response');
                    console.log(JSON.stringify(data));

                    window.location = data.redirect_url;
                }).fail(function (data) {
                    console.log('failure');
                    console.log(JSON.stringify(data));
                });
            }
        );
    });

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


    $(document).ready(function() {
        $('#fastforward').click(
            function ()
            {
                console.log('click registered');
                $.getJSON('/fastforward/', function(data) {
                    console.log('Got response');
                    console.log(JSON.stringify(data));
                }).fail(function (data) {
                    console.log('failure');
                    console.log(JSON.stringify(data));
                });
            }
        );
    });






});