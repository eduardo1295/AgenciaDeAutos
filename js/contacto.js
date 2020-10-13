$(document).ready(function(){

    $(".btn-enviar").click(function(){

        $.ajax({
            url: "prueba.php",
            method: "post",
            data:{
                action : "Listo"
            }
        }).done(function(data){
            console.log(data);
        });
    });
});