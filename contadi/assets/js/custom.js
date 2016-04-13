(function ($) {
    "use strict";
    var mainApp = {

        main_fun: function () {
            $('#main-menu').metisMenu();

            $(window).bind("load resize", function () {
                if ($(this).width() < 768) {
                    $('div.sidebar-collapse').addClass('collapse')
                } else {
                    $('div.sidebar-collapse').removeClass('collapse')
                }
            });     
        },

        initialization: function () {
            mainApp.main_fun();
        }

    }
    // Initializing ///
    $(document).ready(function () {
        mainApp.main_fun();

        var umClick = false;
        var count = 0;
        $('#addParcela').on('click', function(){
            if(umClick == false){
                var $qtd = parseInt($('#qtdParcela').val());
                while(count < $qtd){
                    $('#parcelas').append("<input type='text' class='form-control1' value='" + (count+1) + "' /> <input type='text' class='form-control2 txtVencimento' name='parcela"+ (count+1) +"' maxlength='10' onkeyup='Formatadata(this,event)' />");
                    count++;
                }
                umClick = true;
            }
            else{
                $('#parcelas').append("<input type='text' class='form-control1' value='" + (count+1) + "' /> <input type='text' class='form-control2 txtVencimento' name='parcela"+ (count+1) +"' maxlength='10' onkeyup='Formatadata(this,event)'/>");
                count++;
            }
        });

    });

}(jQuery));
