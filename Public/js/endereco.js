$(document).ready(() => {

    $("#cep").blur(function () {
        var cep = $(this).val().replace(/\D/g, "");

        if (cep != "") {
            console.log(cep);
            $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {
                
                if (!("erro" in dados)) {

                    console.log(dados);
                    $('#endereco').val(dados.logradouro);                    
                    $('#bairro').val(dados.bairro);
                    $('#cidade').val(dados.localidade);
                    $('#estado').val(dados.uf);

                }

            }).fail((e) => {
                alert("CEP NÃO ENCONTRADO");
            });

        }

    });
});

