bandera_email = true;
bandera_municipio = false;
opcion = "";
id_eliminar = 0;
$(document).ready(function () {
  /*ESTA ES LA PARTE QUE SE AÑADIDO LO DEMAS ES DE LA PRACTICA */
  $(".btn-registrarse").click(function () {
    if( $("#anombre").val() == "" || $("#aemail").val() == "" || $("#apass").val() == "" || $("#adireccion").val() == "" || $("#atelefono").val() == "" ){
          Swal.fire({
            icon: 'error',
            title: 'Error.',
            text: 'Faltan agregar datos necesarios.'
          })
        } else{
          $.ajax({
            method: "post",
            url: "php/usuario.php",
            data: {
              action: "agregar_usuarios",
              nombre: $("#anombre").val(),
              email: $("#aemail").val(),
              pass: $("#apass").val(),
              direccion: $("#adireccion").val(),
              telefono: $("#atelefono").val(),
            },
            success: function (data) {
              console.log(data);
              if (data == 200) {
                Swal.fire({
                  icon: 'success',
                  title: 'Registrado',
                  text: 'Se ha registrado correctamente',
                  onClose: function () {
                    $(location).attr('href', "login.php");
                  }
                })
              }
              else if (data == 405) {
                Swal.fire({
                  icon: 'error',
                  title: 'Error',
                  text: 'El email ya esta registrado.'
                })
              }
            }
          });


        }
  
        
        
    
  });

  $(".btn-login").click(function () {
    $.ajax({
      method: "post",
      url: "php/usuario.php",
      data: {
        action: "login",
        email: $("#lemail").val(),
        pass: $("#lpass").val(),
      },
      success: function (data) {
        if (data == 200) {
          $(location).attr('href', "admin.php");
        }
        else if (data == 404) {
          Swal.fire({
            icon: 'error',
            title: 'error',
            text: 'Email o contraseña invalido!'
          })
        }
      }
    });
  });
});

