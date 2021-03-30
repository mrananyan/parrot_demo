function initLongPolling() {
    $.ajax({
            type: 'GET',
            url: '/worker.php',
            success: function(data){
                if (data.type === 'reconnect'){
                    initLongPolling();
                } else if (data.type === 'message'){
                    initLongPolling();
                    let event = JSON.parse(data.data.message);
                    $('#chatHistory').prepend('<p><b>'+event.name+'</b>: '+event.message+'</p>');
                    $('#introBox').hide();
                    document.getElementById('parrot').play()
                    $('#chatHistory').show();
                }
            }
        });
}

function sendMessage() {
    $.ajax({
            type: 'POST',
            url: '/send.php',
            data: {
                "name": $('#name').val(),
                "message": $('#Message').val()
            },
            success: function(data){
                console.log(data);
                $('#Message').val('')
            }
        });
}

$(function() {
    initLongPolling();
});