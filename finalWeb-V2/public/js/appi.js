//Gráfica 1
var nombre = [];
var clase = [];

//consumo de la API

let url= 'https://www.datos.gov.co/resource/e7k2-6jf2.json';
fetch(url)


//Then necesita una promesa, y esa promesa se resuelve
.then(datos_obtenidos => datos_obtenidos.json())

//datos_obtenidos es el resultado de la promesa repuesta
.then(function transformar (datos_obtenidos){
    //iteramos sobre cada dato
    datos_obtenidos.forEach (function agregar (datos_obtenidos)
    {
        if (datos_obtenidos.subclase_de_equipamiento != undefined && datos_obtenidos.municipio != undefined){
            nombre.push(datos_obtenidos.subclase_de_equipamiento);
            clase.push(datos_obtenidos.municipio);
        }
    });

    //variables para las graficas
    var graf1={
        x: clase,
        y: nombre,
        font:{
            family: 'Raleway, sans-serif'
          },
        type: 'bar'
      }
    

    var datosGraficas = [graf1];

    //Estilos de la gráfica
    var layout = {
        title: 'ABASTECIMIENTO DE ALIMENTOS DEL DEPARTAMENTO DE CALDAS',
        height: 700,
        width: 600
    };

    Plotly.newPlot('grafica1', datosGraficas, layout);
    

});