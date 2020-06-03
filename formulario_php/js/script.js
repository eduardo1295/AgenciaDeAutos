$(document).ready(function(){      
      $('#table_id').DataTable();
      
      $.getJSON( "json/estados.json", function( data ) {
        var items = [];
        var i = 0;
        $.each( data, function( key, val ) {
          $.each( val, function( key2, val2 ) {
              if(key2 == "nombre")
                //items.push( "<li id='" + key2 + "'>" + val2+ "</li>" );
                items.push( "<option value='"+val2+"'>"+val2+"</option>" );
            i++;
          });
        });
        $("#estados").append(items.join());
      });

      $("#estados").change(function(){
        $("#municipios option:not(:first-child)").each(function() {
          $(this).remove();
        });
        
        $.getJSON( "json/estados-municipios.json", function( data ) {
          var items = [];
          var i = 0;
          $.each( data, function( key, val ) {
            if(key.toUpperCase() == $("#estados").val()){
              for (let x = 0; x < val.length; x++) {
                  items.push( "<option value='"+val[x]+"'>"+val[x]+"</option>" );  
              }
            }
          });
          $("#municipios").append(items.join());
        });
      });
      $(".btn-agregar").click(function(){
        $.ajax({
          method: "post",
          url: "php/persona.php",
          data:{
              action: "agregarUsuario",
              nombre: $("#nombre").val(),
              correo: $("#correo").val(),
              pass: $("#pass").val(),
              tel: $("#tel").val(),
              carrera: $("#carrera").val(),
              curp: $("#curp").val(),
              genero: $("#genero").val(),
              fecha_nac: $("#fecha_nac").val(),
              estados: $("#estados").val(),
              municipios: $("#municipios").val()
          },
          success: function(data){
            console.log("Funciono")
          }
        })
      })

});