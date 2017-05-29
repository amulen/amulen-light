/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {

    $("table.table.fw-collapsible tr").click(function () {
        var open = $(this).attr("open");
        revert($(this), open);
    })
    $(".btn-fw-collapsible").click(function () {
        var open = $(this).attr("open");
        var table = $("table.table tr");

        if (open) {
            $(this).children("i").removeClass("glyphicon glyphicon-minus");
            $(this).children("i").addClass("glyphicon glyphicon-plus");

        } else {
            $(this).children("i").removeClass("glyphicon glyphicon-plus");
            $(this).children("i").addClass("glyphicon glyphicon-minus");
        }
        $(table).each(function (i) {
            if ($(table[i]).hasClass("depth-3")) {
                revert($(table[i]), open);
            }

        });

        $(this).attr("open", !open);
    });

    //Invierte el estado de despliegue de la fila recibida por parametro
    //Reverses the deployment status of the row received by parameter
    function revert(row, open) {

        var accountKey = $(row).attr("me");
        var meIcon = $(row).children("td").children("button").children("i");
        var childIcon = $("." + accountKey).children("td").children("button").children("i")
        if (open) {
            $("." + accountKey).hide();
            childIcon.removeClass("glyphicon glyphicon-minus");
            childIcon.addClass("glyphicon glyphicon-plus");
            meIcon.removeClass("glyphicon glyphicon-minus");
            meIcon.addClass("glyphicon glyphicon-plus");
        } else {
            $("." + accountKey).show();
            childIcon.removeClass("glyphicon glyphicon-plus")
            childIcon.addClass("glyphicon glyphicon-minus")
            meIcon.removeClass("glyphicon glyphicon-plus");
            meIcon.addClass("glyphicon glyphicon-minus");
        }
        $("." + accountKey).attr("open", !open);
        $(row).attr("open", !open);

    }
})


