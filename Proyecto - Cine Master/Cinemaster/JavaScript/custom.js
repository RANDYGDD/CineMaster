$(document).ready(function(){
    $("#formulario").submit(function(event){
       event.preventDefault();
        
        $.ajax({
           type: 'POST',
           url:  'send.php',
           data: $(this).serialize(),
           success  function(data){
               $("#repuesta").slideDown();
               $("#respuesta").html(data);
           }
        });
        
        var hola="hola";

        
        
        
       return false;  
});
    
});