
$(document).ready(function() {

  $(".al").click(function() {
        $(".al").each(function() {
            $(this).css("background-color", " #14ab9f");
            $(this).removeAttr("style");

        });
        $(this).css("background-color", "red");

        $.ajax({
        		method: 'POST',
                url: "index.php/c_enlec/lectura1",
                data: {
                    nombre: "lectura",
                    indicador: 1
                },
                //dataType: 'JSON'
               
            })
            .done(function(msg) {
                alert("Datos resividos" + msg);
            });
    });


});