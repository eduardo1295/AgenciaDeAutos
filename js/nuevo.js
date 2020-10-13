bandera_email = true;
bandera_municipio = false;
opcion = "";
id_eliminar = 0;
$(document).ready(function(){      
      /*GENERACION DE LA TABLA*/
      tablaNuevos =$('#table_id').DataTable({
        'ajax': {
          'url': "php/nuevo.php",
          'type': "POST",
          'data': { 'action': "mostrar_nuevos" },
          "dataSrc":""
        },
        "columns": [
          { "defaultContent": "" },
          { "data": "Id_nuevo" },
          { "data": "modelo_n" },
          { "data": "marca_n" },
          { "data": "precio_n" },
          { "data": "promocion_n" },
          { "data": "seguro_n" },
          {
            "render": function (data, type, full, meta) {
            
            },
            sortable: false,
                 "render": function ( data, type, full, meta ) {
                     var editID = full.Id_nuevo;
                     var deleteID = full.Id_nuevo;
                     return "<div class='text-center'><div class='btn-group'><button id='"+editID+"' class='btn btn-primary btn-sm btnEditar'><i class='far fa-edit'></i></button><button id='"+deleteID+"' class='btn btn-danger btn-sm btnBorrar'><i class='fas fa-trash'></i></button></div></div>";
                 }
          }
        ],
        responsive: {
          details: {
              type: 'column'
          }
        },
        columnDefs: [ {
          className: 'control',
          orderable: false,
          targets:   0
        } ],
        order: [ 1, 'asc' ]
        });
      
      /*Agrega  persona */
      $(".btn-agregar-nuevo").click(function(){
        if($("#nmodelo").val() == "" || $("#nmarca").val() == "" ||
         $("#nprecio").val() == "" || $("#npromocion").val() == "" || $("#nseguro").val() == ""){
          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Falta agregar datos, revisar en el formulario'
          })
        }
        else{
          var bandera_principal = true;
          if(opcion == "editarUsuario"){

            formData = new FormData();
            formData.append('action', "editar_nuevos");
            formData.append("id",datos[0]["Id_nuevo"]);
            formData.append("modelo", $("#nmodelo").val());
            formData.append("marca", $("#nmarca").val());
            formData.append("precio", $("#nprecio").val());
            formData.append("promocion", $("#npromocion").val());
            formData.append("seguro", $("#nseguro").val());
            formData.append("foto",$("#nfoto")[0].files[0]);
            
          }else{
            formData = new FormData();
            formData.append('action', "agregar_nuevos");
            //formData.append("id",datos[0]["Id_nuevo"]);
            formData.append("modelo", $("#nmodelo").val());
            formData.append("marca", $("#nmarca").val());
            formData.append("precio", $("#nprecio").val());
            formData.append("promocion", $("#npromocion").val());
            formData.append("seguro", $("#nseguro").val());
            formData.append("foto",$("#nfoto")[0].files[0]);
          }
          if(bandera_principal){
            $.ajax({
              method: "post",
              url: "php/nuevo.php",
              data: formData,
              contentType: false, 
              processData: false,
              success: function(data){
                if(data == 200){
                  Swal.fire({
                    icon: 'success',
                    title: 'Agregado',
                    text: 'El vehiculo ha sido agregada correctamente'
                  })
                  tablaNuevos.ajax.reload(null, false);
                }
                if(data == 201){
                  Swal.fire({
                    icon: 'success',
                    title: 'Editados',
                    text: 'La persona ha sido editada correctamente'
                  })
                  tablaNuevos.ajax.reload(null, false);
                }
              }
            })
          }
        }
        
      })
      /*Le da click al boton agregar*/
      $(".btn-add").click(function(){
        $(".modal-body .row div input").val("");
        $(".modal-header .modal-title").html("Agregar Nuevo");
        $("button.btn-agregar").html("Agregar");
      })

      $(document).on("click",".btnEditar",function(){
        console.log("click_editar");
        opcion = "editarUsuario";  
        $(".modal-header .modal-title").html("Editar Persona");
        $("button.btn-agregar").html("Editar");
        $.ajax({
          method: "post",
          url: "php/nuevo.php",
          data:{
              action: "mostrar_nuevos",
              id : $(this).attr("id")
          },
          success: function(data){
            datos = JSON.parse(data);

            $("#nmodelo").val(datos[0]["marca_n"]);
            $("#nmarca").val(datos[0]["modelo_n"]);
            $("#nprecio").val(datos[0]["precio_n"]);
            $("#npromocion").val(datos[0]["promocion_n"]);
            $("#nseguro").val(datos[0]["seguro_n"]);
          }
        }).done(function(){
          $('#exampleModalCenter').modal('toggle');
        })
        
        
      });
      
      $(document).on("click",".btnBorrar",function(){
          id_eliminar = $(this).attr("id");
          $('#ModalEliminar').modal('toggle');          
      });

      $(".btn-eliminar").click(function(){
        $.ajax({
          method: "post",
          url: "php/nuevo.php",
          data:{
              action: "eliminar_nuevos",
              id : id_eliminar
          },
          success: function(data){
            if(data == 202){
              Swal.fire({
                icon: 'success',
                title: 'Eliminado',
                text: 'La persona ha sido eliminada correctamente'
              })
              $('#ModalEliminar').modal('toggle');
              tablaNuevos.ajax.reload(null, false);
            }
          }
        }).done(function(){
          //$('#exampleModalCenter').modal('toggle');
        })
      });
      
      $("#tel").inputFilter(function(value) {
        return /^\d*$/.test(value);    // Allow digits only, using a RegExp
      });
      
      $("#nombre").on('input', function() {
        //this.value = this.value.replace(/[^a-zA-Z\n]/g, ''); //<-- replace all other than given set of values
      });
      $(document).on("load",".modal-open",function(){
        console.log("inicio");
      })  
      

});



//proof();

