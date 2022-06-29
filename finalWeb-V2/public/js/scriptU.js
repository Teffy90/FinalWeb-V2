//Formulario Usuario
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formularioUsuario").addEventListener('submit', validarFormulario); 
  });
  
  function validarFormulario(evento) {
    evento.preventDefault();
    var nombre = document.getElementById('nombre').value;
    if(nombre.length == 0) {
      alert('No has escrito nada en el Nombre');
      return;
    }
    var apellidos = document.getElementById('apellidos').value;
    if (apellidos.length == 0) {
      alert('No has escrito nada en el apellido');
      return;
    }
    var telefono = document.getElementById('telefono').value;
    if (telefono.length == 0) {
      alert('No has escrito nada en el telefono');
      return;
    }
    this.submit();
  }