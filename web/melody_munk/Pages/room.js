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

    $(document).ready(function() {
        console.log('doc loaded');
        $('#searchbutton').click(
            function ()
            {
                var x = document.getElementById("mySearch");
                document.getElementById("demo").innerHTML = x;
            }
        );
        $('#playbutton').click(
            function ()
            {
                console.log('click registered');
                $.getJSON('/play/', function(data) {
                    console.log('Got response');
                    console.log(JSON.stringify(data));
                }).fail(function (data) {
                    console.log('failure');
                    console.log(JSON.stringify(data));
                });
            }
        );
        $('#pausebutton').click(
            function ()
            {
                console.log('click registered');
                $.getJSON('/pause/', function(data) {
                    console.log('Got response');
                    console.log(JSON.stringify(data));
                }).fail(function (data) {
                    console.log('failure');
                    console.log(JSON.stringify(data));
                });
            }
        );
        $('#raisevolumebutton').click(
            function ()
            {
                console.log('click registered');
                $.getJSON('/raisevolume/', function(data) {
                    console.log('Got response');
                    console.log(JSON.stringify(data));
                }).fail(function (data) {
                    console.log('failure');
                    console.log(JSON.stringify(data));
                });
            }
        );
        $('#lowervolumebutton').click(
            function ()
            {
                console.log('click registered');
                $.getJSON('/lowervolume/', function(data) {
                    console.log('Got response');
                    console.log(JSON.stringify(data));
                }).fail(function (data) {
                    console.log('failure');
                    console.log(JSON.stringify(data));
                });
            }
        );
        $('#nextsong').click(
            function ()
            {
                console.log('click registered');
                $.getJSON('/nextsong/', function(data) {
                    console.log('Got response');
                    console.log(JSON.stringify(data));
                }).fail(function (data) {
                    console.log('failure');
                    console.log(JSON.stringify(data));
                });
            }
        );
        $('#prevsong').click(
            function ()
            {
                console.log('click registered');
                $.getJSON('/prevsong/', function(data) {
                    console.log('Got response');
                    console.log(JSON.stringify(data));
                }).fail(function (data) {
                    console.log('failure');
                    console.log(JSON.stringify(data));
                });
            }
        );
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