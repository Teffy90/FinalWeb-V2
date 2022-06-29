@extends('header')

@section('contenido2')

<h1>Supermercado Buena Fortuna</h1>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner ">
    <div class="carousel-item active">
      <img src="imagenes/Descuentos.PNG" class="img-fluid d-block mx-auto"  width="500" height="360" alt="..." >
    </div>
    <div class="carousel-item ">
      <img src="imagenes/Fruteria.PNG" class="img-fluid d-block mx-auto"  width="500" height="360" alt="...">
    </div>
    <div class="carousel-item ">
      <img src="imagenes/Carnes.PNG" class="img-fluid d-block mx-auto"  width="500" height="360" alt="..." >
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden" >Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden" >Next</span>
  </button>
    </div>
    <br>
    <br>
    <br>
        <!-- cards -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="imagenes/Carnes_pollo.png" class="card-img-top d-block mx-auto" width="200" height="260"alt="...">
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="imagenes/Despensa.png" class="card-img-top d-block mx-auto" width="200" height="260" alt="...">
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="imagenes/Lacteos.png" class="card-img-top d-block mx-auto" width="200" height="260" alt="...">
    </div>
  </div>
  <div class="col d-block mx-auto" >
    <div class="card h-100">
      <img src="imagenes/Frutas_verduras.png" class="card-img-top d-block mx-auto" width="200" height="260" alt="...">
    </div>
  </div>
  <div class="col d-block mx-auto">
    <div class="card h-100">
      <img src="imagenes/Limpieza.png" class="card-img-top d-block mx-auto" width="200" height="260" alt="...">
    </div>
  </div>
</div>


@endsection

