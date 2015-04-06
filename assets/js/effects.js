var loaded = function(){
agregar();
};

var agregar = function(){
 $("#btnagregar").on("Click", function(){
    alert("hola"); 
 });
};
$(document).ready(loaded);
