$(document).ready(function(){
    var jqxhr = $.getJSON( "/json/estados.json", function() {
        console.log( "success" );
      })
});