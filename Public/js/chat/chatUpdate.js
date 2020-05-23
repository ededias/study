$(document).ready(() => {

    function divValue() {
        const id = ($('#idEnviar').text());
        $("#idRecebedor").val(id);
    }

    function ajax() {
        var data = $(this).serialize();
        return $.ajax({
            type: "GET",
            url: '/msg',
            dataType: data,
            success: function ajax(res) {
                $("#chat").html(`${res}`);
            }
        });
    }



    $("#sticky-header").addClass("fixed-top");

    function ajaxP() {
        var data = $(this).serialize();
        return $.ajax({
            type: "GET",
            url: 'bludv/Public/chatPersons',
            dataType: data,
            success: function ajax(res) {
                $("#chatPersons").html(`${res}`);
            }
        });
    }

    function scroll() {
        return $(".chat").stop().animate({ scrollTop: $(".chat")[0].scrollHeight }, 1000);
    }

    $('#buttonMsg').click(function() {
        if (this.id == "buttonMsg") {
            const interval = setInterval(() => {
                scroll();
                ajax();
                clearInterval(interval);
            }, 1000);
        }
    });

    ajax();
    // ajaxP();
    const a = setInterval(() => {
        scroll();
        divValue();
        clearInterval(a)
    }, 2000);
    setInterval(() => {
        // ajaxP();
        ajax();
    }, 2000);

});