$(document).ready(() => {

    function divValue() {
        var id = ($('#idEnviar').text());
        $("#idRecebedor").val(id);
    }

    function urlChat() {
        return $("#boxpersons").attr('href')
    }

    $(document).on('click', '#boxpersons', function (e) {
        e.preventDefault()
        setInterval(() => {
            $.ajax({
                type: 'GET',
                url: urlChat(),
                success: (res) => {
                    $('#chat').html(res)
                }
            });
            divValue()
        }, 2000);
    })
    // divValue();
})