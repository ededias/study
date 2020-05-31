$(document).ready(() => {

    function scroll() {
        return $("#chat").stop().animate({ scrollTop: $(".chat")[0].scrollHeight }, 1000);
    }
    
    scroll();
    $(document).on('click', '#boxpersons', function (e) {
        e.preventDefault()
        
        var idEnviar = $(this).data('idenviar');
        $("#idRecebedor").val(idEnviar);
        url = this;
        setInterval(function req() {
            $.ajax({
                type: 'GET',
                url: url,
                success: (res) => {
                    $('#chat').html(res)
                }
            });
            scroll();
        }, 2000)
        req.abort()
    })

})