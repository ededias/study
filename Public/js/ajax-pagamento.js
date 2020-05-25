// $((document) => {

//     $('#pagamento').submit((e) =>{
//         e.preventDefault()
//         formData = $('#pagamento').serialize();
//         $.ajax({
//             type: 'POST',
//             url: '/mercadopago',
//             data: formData,
            
//         }).done(response => {
//             url = 'https://www.mercadopago.com.br/integrations/v1/web-payment-checkout.js'
            
           
//             $('#mp').attr('src', url);
//         })
//     })

// })