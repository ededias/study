$(document).ready(() => {



    $("#sticky-header").addClass("fixed-top");

    function ajaxP() {
        var data = $(this).serialize();
        return $.ajax({
            type: "GET",
            url: '/chatPersons',
            dataType: data,
            success: function ajax(res) {
                $("#chatPersons").html(`${res}`);
            }
        });
    }
  
    ajaxP();
 

});