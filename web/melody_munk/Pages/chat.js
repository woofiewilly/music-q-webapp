$(document).ready(function () {

    connectToChat();

    $('#chat_form_submit').click(function () {
        console.log('Attempting send message');
       sendChatMessage();
    });

    $('#chat_form_message').keypress(function (event) {
       if (event.which === 13) {
           event.preventDefault();
           sendChatMessage();
       }
    });

    window.setInterval(function () {
        console.log('Checking if chat is alive. readystate = ' + conn.readyState + ' rec = ' + reconnecting);
        if ((conn.readyState !== 0 || conn.readyState !== 1) && !reconnecting) {
            reconnect(1);
        }
    }, 5000);

});

// Change localhost to the name or ip address of the host running the chat server
var chatUrl = 'ws://localhost:8081';

function displayChatMessage(from, message) {
    var chat_element = $('.mm_chat');

    var sender_name = 'Unknown';
    if (from) {
        var sender_name = from;
    }
    chat_element.append(
        '<div class="desc">' +
        '   <div class="thumb">' +
        '       <img src="/img/placeholders/default.jpeg" class="img-circle mm-chat-img-av">' +
        '   </div>' +
        '   <div class="details">' +
        '       <p class="chat-name">' + sender_name + '</p>' +
        '       <p class="chat-content">' + message + '</p>' +
        '       <p class="chat-time">ChatBundle timestamp</p>' +
        '   </div>' +
        '</div>'
    );

    chat_element.animate({scrollTop: chat_element.prop('scrollHeight')}, 2000);
}

var conn;

function connectToChat() {
    conn = new WebSocket(chatUrl);

    conn.onopen = function() {

        var params = {
            'roomId': $('#chat_room_id').val(),
            'userName': $('#chat_room_username').val(),
            'action': 'connect'
        };
        console.log(params);
        conn.send(JSON.stringify(params));
    };

    conn.onmessage = function(e) {
        console.log(e);
        var data = JSON.parse(e.data);

        if (data.hasOwnProperty('message') && data.hasOwnProperty('from')) {
            displayChatMessage(data.from.name, data.message);
        }
        else if (data.hasOwnProperty('message')) {
            displayChatMessage(null, data.message);
        }
        else if (data.hasOwnProperty('type')) {
            if (data.type === 'list-users' && data.hasOwnProperty('clients')) {
                displayChatMessage(null, 'There are ' + data.clients.length + ' users connected');
            }
            else if (data.type === 'user-started-typing') {
                displayUserTypingMessage(data.from)
            }
            else if (data.type === 'user-stopped-typing') {
                removeUserTypingMessage(data.from);
            }
        }
    };

    conn.onerror = function(e) {
        console.log(e);

        conn.close();
    };

    conn.onclose = function(e) {
        console.log(e);

        if (!reconnecting) {
            reconnect(1);
        }

    };

    return false;
}

reconnecting = false;
function reconnect(attempt) {
    reconnecting = true;

    // 0 = connecting, 1 = ready
    while (conn.readyState === 0) {
        // Wait until conn is done connecting (not 0)
    }
    if (conn.readyState === 1) {
        console.log('Successfully reconnected');
        reconnecting = false;
        return; // In case it wasn't ready outside before while loop
    }

    displayChatMessage('Info', 'Connection lost, attempting to reconnect, attempt ' + attempt + '...');
    connectToChat();

    setTimeout(function() {
        if (conn.readyState !== 1) {
            reconnect(attempt + 1);
        } else {
            console.log('Successfully reconnected');
            reconnecting = false;
        }
    }, 5000);

}

function sendChatMessage() {
    var form = $('#chat_form');
    var message_element = $('#chat_form_message');
    var message = message_element.val();

    var d = new Date();
    var params = {
        'message': message,
        'action': 'message',
        'timestamp': d.getTime()/1000
    };
    console.log('Attempting to send: ' + JSON.stringify(params));
    conn.send(JSON.stringify(params));

    message_element.val('');
    return false;
}
