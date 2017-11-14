$(function() {


    //Input fields
    var roomID = $('#mm_room_id').val();


    var host_review_content = $('#mm_host_review_content');
    var host_review_submit = $('#mm_host_review_submit');


    var mm_reported_users = $('#mm_reported_users');


    var mm_report_user_btn = $('.mm_report_user_btn');


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


    mm_report_user_btn.on('click', function() {

        mm_reported_users.attr('class', 'row');

    });


});