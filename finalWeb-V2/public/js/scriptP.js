//Formulario Producto
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formularioProducto").addEventListener('submit', validarFormulario); 
  });
  
  function validarFormulario(evento) {
    evento.preventDefault();
    var nombre = document.getElementById('nombre').value;
    if(nombre.length == 0) {
      alert('No has escrito nada en el Nombre');
      return;
    }
    var codigo_barras = document.getElementById('codigo_barras').value;
    if (codigo_barras.length == 0) {
      alert('No has escrito nada en el codigo de barras');
      return;
    }
    var presentacion = document.getElementById('presentacion').value;
    if (presentacion.length == 0) {
      alert('No has escrito nada en la presentacion');
      return;
    }
    var cantidad = document.getElementById('cantidad').value;
    if (cantidad.length == 0) {
      alert('No has escrito nada en la cantidad');
      return;
    }
    var unidades = document.getElementById('unidades').value;
    if (unidades.length == 0) {
      alert('No has escrito nada en las unidades');
      return;
    }
    var precio_entrada = document.getElementById('precio_entrada').value;
    if (precio_entrada.length == 0) {
      alert('No has escrito nada en el precio de entrada');
      return;
    }
    var precio_salida = document.getElementById('precio_salida').value;
    if (precio_salida.length == 0) {
      alert('No has escrito nada en el precio de salida');
      return;
    }
    this.submit();
  }