$(document).ready(() => {

    function divValue() {
        var id = ($('#idEnviar').text());
        return id;
    }

    href = $('#boxpessos')
    console.log($(href).attr('href'))
    $(href).click((e) => {
        e.preventDefault();
    })
    $.ajax({
        type: 'GET',
        url: `/getPersons?id=${2}`,
        success: (res) => {
            console.log(res)
        }
    })
    const a = setInterval(() => {
        divValue();
        clearInterval(a)
    }, 2000);
    console.log(divValue())
})