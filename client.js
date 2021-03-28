function initLongPolling() {
    $.ajax({
            type: 'GET',
            url: '/worker.php',
            success: function(data){
                if (data.type === 'reconnect'){
                    initLongPolling();
                } else if (data.type === 'message'){
                    let event = JSON.parse(data.data.message);
                    $('#chatHistory').append('<p><b>'+event.name+'</b>: '+event.message+'</p>');
                    initLongPolling();
                }
            }
        });
}

function sendMessage() {
    $.ajax(
        {
            type: 'POST',
            url: '/send.php',
            data: {
                "name": $('#name').val(),
                "message": $('#message').val()
            },
            success: function(data){
                console.log(data)
            }
        }
    );
}

$(function() {
    initLongPolling();
});